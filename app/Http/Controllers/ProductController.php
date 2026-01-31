<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = ProductCategory::orderBy('order', 'asc')->get();
        $selectedCategory = $request->get('category');
        
        $query = Product::with('category')->orderBy('id', 'desc');
        
        if ($selectedCategory) {
            $query->where('category_id', $selectedCategory);
        }
        
        $products = $query->paginate(10)->withQueryString();
        
        return view('backend.products.index', compact('products', 'categories', 'selectedCategory'));
    }

    public function create()
    {
        $categories = ProductCategory::all();
        return view('backend.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image',
            'type' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'long_description' => 'nullable|string',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:product_categories,id',
            'parent_id' => 'nullable|exists:products,id',
            'gallery_images.*' => 'required|image',
            'gallery_titles.*' => 'required|string|max:255',
        ]);

        // Handle main image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $publicPath = public_path('images/products');
            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0755, true);
            }
            $image->move($publicPath, $imageName);
            $validated['image'] = 'images/products/' . $imageName;
        }

        // Handle gallery images with titles
        if ($request->hasFile('gallery_images')) {
            $galleryData = [];
            $galleryImages = $request->file('gallery_images');
            $galleryTitles = $request->input('gallery_titles');
            
            $publicPath = public_path('images/products/gallery');
            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0755, true);
            }

            foreach ($galleryImages as $index => $galleryImage) {
                $galleryImageName = time() . '_' . $index . '_' . $galleryImage->getClientOriginalName();
                $galleryImage->move($publicPath, $galleryImageName);
                
                $galleryData[] = [
                    'image' => 'images/products/gallery/' . $galleryImageName,
                    'title' => $galleryTitles[$index] ?? '',
                ];
            }

            $validated['gallery'] = json_encode($galleryData);
        }

        Product::create($validated);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = ProductCategory::all();
        return view('backend.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image',
            'type' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'long_description' => 'nullable|string',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:product_categories,id',
            'parent_id' => 'nullable|exists:products,id',
            'gallery_images.*' => 'nullable|image',
            'gallery_titles.*' => 'nullable|string|max:255',
            'existing_gallery' => 'nullable|json',
        ]);

        // Handle main image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }
            
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $publicPath = public_path('images/products');
            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0755, true);
            }
            $image->move($publicPath, $imageName);
            $validated['image'] = 'images/products/' . $imageName;
        }

        // Handle gallery: existing (kept) items + new uploads. Deleted items are not in existing_gallery.
        $galleryData = [];

        // 1. Existing gallery items (jo user ne remove nahi kiye) — image path + title backend tak aate hain
        if ($request->filled('existing_gallery')) {
            $existingGallery = json_decode($request->input('existing_gallery'), true);
            if (is_array($existingGallery)) {
                foreach ($existingGallery as $item) {
                    if (!empty($item['image']) && !empty($item['title'])) {
                        $galleryData[] = [
                            'image' => $item['image'],
                            'title' => $item['title'],
                        ];
                    }
                }
            }
        }

        // 2. New gallery images (Add More se add kiye)
        if ($request->hasFile('gallery_images')) {
            $galleryImages = $request->file('gallery_images');
            $galleryTitles = $request->input('gallery_titles', []);
            
            $publicPath = public_path('images/products/gallery');
            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0755, true);
            }

            foreach ($galleryImages as $index => $galleryImage) {
                if ($galleryImage && $galleryImage->isValid()) {
                    $galleryImageName = time() . '_' . $index . '_' . $galleryImage->getClientOriginalName();
                    $galleryImage->move($publicPath, $galleryImageName);
                    
                    $galleryData[] = [
                        'image' => 'images/products/gallery/' . $galleryImageName,
                        'title' => $galleryTitles[$index] ?? '',
                    ];
                }
            }
        }

        // Hamesha gallery save karo — chahe empty ho (sab delete kiye hon) ya items hon
        $validated['gallery'] = json_encode($galleryData);

        $product->update($validated);

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        
        // Delete image if exists
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }
        
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully!');
    }

    public function categoryProducts(Request $request, $category)
    {
        // Accept category ID from route parameter
        $categoryModel = ProductCategory::findOrFail($category);
        $productId = $request->productId;
        $currentProduct = Product::where('id', $productId)->first();
        if ($request->productId) {
            $products = Product::where('parent_id', $request->productId)->get();
        } else {
            $products = Product::where('category_id', $categoryModel->id)->get();
        }
        return view('frontend.products.index', compact('categoryModel', 'products', 'productId', 'currentProduct'));
    }

    public function categoryMainProducts($category)
    {
        // Accept category ID from route parameter
        $categoryModel = ProductCategory::findOrFail($category);
        // Get only main products for this category
        $mainProducts = Product::where('category_id', $categoryModel->id)
            ->where('parent_id', null)
            ->get();
        return view('frontend.products.main-products', compact('categoryModel', 'mainProducts'));
    }

    public function getProductsByCategory(Request $request)
    {
        $categoryId = $request->get('category_id');
        
        if (!$categoryId) {
            return response()->json(['products' => []]);
        }

        $products = Product::where('category_id', $categoryId)
            ->select('id', 'name')
            ->get();

        return response()->json(['products' => $products]);
    }

    public function bulkDelete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'required|integer|exists:products,id',
        ]);

        $ids = $request->ids;
        $count = count($ids);

        // Delete products and their images
        foreach ($ids as $id) {
            $product = Product::findOrFail($id);
            
            // Delete image if exists
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }
            
            $product->delete();
        }

        return redirect()->route('products.index')
            ->with('success', $count . ' product' . ($count > 1 ? 's' : '') . ' deleted successfully!');
    }
}
