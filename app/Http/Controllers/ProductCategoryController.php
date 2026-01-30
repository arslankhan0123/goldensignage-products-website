<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function productCategories()
    {
        $productCategories = ProductCategory::orderBy('order', 'asc')->get();
        return view('backend.products.categories.index', compact('productCategories'));
    }

    public function create()
    {
        return view('backend.products.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'has_intermediate_page' => 'nullable|boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $publicPath = public_path('images/categories');
            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0755, true);
            }
            $image->move($publicPath, $imageName);
            $validated['image'] = 'images/categories/' . $imageName;
        }

        // Set order to be the last in the list
        $maxOrder = ProductCategory::max('order') ?? 0;
        $validated['order'] = $maxOrder + 1;

        ProductCategory::create($validated);

        return redirect()->route('categories.index')
            ->with('success', 'Category created successfully!');
    }

    public function edit($id)
    {
        $category = ProductCategory::findOrFail($id);
        return view('backend.products.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = ProductCategory::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'has_intermediate_page' => 'nullable|boolean',
        ]);

        // Handle checkbox - if not present, set to false
        $validated['has_intermediate_page'] = $request->has('has_intermediate_page') ? true : false;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($category->image && file_exists(public_path($category->image))) {
                unlink(public_path($category->image));
            }
            
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $publicPath = public_path('images/categories');
            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0755, true);
            }
            $image->move($publicPath, $imageName);
            $validated['image'] = 'images/categories/' . $imageName;
        }

        $category->update($validated);

        return redirect()->route('categories.index')
            ->with('success', 'Category updated successfully!');
    }

    public function destroy($id)
    {
        $category = ProductCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Category deleted successfully!');
    }

    public function updateOrder(Request $request)
    {
        $request->validate([
            'order' => 'required|array',
            'order.*' => 'required|integer|exists:product_categories,id',
        ]);

        foreach ($request->order as $index => $categoryId) {
            ProductCategory::where('id', $categoryId)->update(['order' => $index + 1]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Category order updated successfully!'
        ]);
    }

    public function bulkDelete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'required|integer|exists:product_categories,id',
        ]);

        $ids = $request->ids;
        $count = count($ids);

        // Delete categories and their images
        foreach ($ids as $id) {
            $category = ProductCategory::findOrFail($id);
            
            // Delete image if exists
            if ($category->image && file_exists(public_path($category->image))) {
                unlink(public_path($category->image));
            }
            
            $category->delete();
        }

        return redirect()->route('categories.index')
            ->with('success', $count . ' categor' . ($count > 1 ? 'ies' : 'y') . ' deleted successfully!');
    }
}
