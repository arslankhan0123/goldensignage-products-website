<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('backend.blogs.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('frontend.blogs.show', compact('blog'));
    }

    public function create()
    {
        return view('backend.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'short_description' => 'nullable|string',
            'long_description' => 'nullable|string',
            // 'multiple_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle single image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $publicPath = public_path('images/blogs');
            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0755, true);
            }
            $image->move($publicPath, $imageName);
            $validated['image'] = 'images/blogs/' . $imageName;
        }

        // Handle multiple images upload
        if ($request->hasFile('multiple_images')) {
            $multipleImages = [];
            $publicPath = public_path('images/blogs/multiple');
            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0755, true);
            }
            foreach ($request->file('multiple_images') as $file) {
                $imageName = time() . '_' . uniqid() . '_' . $file->getClientOriginalName();
                $file->move($publicPath, $imageName);
                $multipleImages[] = 'images/blogs/multiple/' . $imageName;
            }
            $validated['multiple_images'] = $multipleImages;
        }

        // Generate unique slug from title
        $baseSlug = Str::slug($validated['title']);
        $slug = $baseSlug;
        $counter = 1;
        
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        
        $validated['slug'] = $slug;

        Blog::create($validated);

        return redirect()->route('blogs.index')
            ->with('success', 'Blog created successfully!');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('backend.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'short_description' => 'nullable|string',
            'long_description' => 'nullable|string',
            // 'multiple_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle single image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }
            
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $publicPath = public_path('images/blogs');
            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0755, true);
            }
            $image->move($publicPath, $imageName);
            $validated['image'] = 'images/blogs/' . $imageName;
        }

        // Handle multiple images upload
        if ($request->hasFile('multiple_images')) {
            // Delete old multiple images
            if ($blog->multiple_images) {
                foreach ($blog->multiple_images as $oldImage) {
                    if (file_exists(public_path($oldImage))) {
                        unlink(public_path($oldImage));
                    }
                }
            }

            $multipleImages = [];
            $publicPath = public_path('images/blogs/multiple');
            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0755, true);
            }
            foreach ($request->file('multiple_images') as $file) {
                $imageName = time() . '_' . uniqid() . '_' . $file->getClientOriginalName();
                $file->move($publicPath, $imageName);
                $multipleImages[] = 'images/blogs/multiple/' . $imageName;
            }
            $validated['multiple_images'] = $multipleImages;
        }

        // Generate unique slug from title if title changed
        if ($blog->title !== $validated['title']) {
            $baseSlug = Str::slug($validated['title']);
            $slug = $baseSlug;
            $counter = 1;
            
            while (Blog::where('slug', $slug)->where('id', '!=', $id)->exists()) {
                $slug = $baseSlug . '-' . $counter;
                $counter++;
            }
            
            $validated['slug'] = $slug;
        }

        $blog->update($validated);

        return redirect()->route('blogs.index')
            ->with('success', 'Blog updated successfully!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        
        // Delete images
        if ($blog->image && file_exists(public_path($blog->image))) {
            unlink(public_path($blog->image));
        }

        if ($blog->multiple_images) {
            foreach ($blog->multiple_images as $image) {
                if (file_exists(public_path($image))) {
                    unlink(public_path($image));
                }
            }
        }

        $blog->delete();

        return redirect()->route('blogs.index')
            ->with('success', 'Blog deleted successfully!');
    }

    public function bulkDelete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'required|integer|exists:blogs,id',
        ]);

        $ids = $request->ids;
        $count = count($ids);

        // Delete blogs and their images
        foreach ($ids as $id) {
            $blog = Blog::findOrFail($id);
            
            // Delete single image if exists
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }

            // Delete multiple images if exists
            if ($blog->multiple_images) {
                foreach ($blog->multiple_images as $image) {
                    if (file_exists(public_path($image))) {
                        unlink(public_path($image));
                    }
                }
            }
            
            $blog->delete();
        }

        return redirect()->route('blogs.index')
            ->with('success', $count . ' blog' . ($count > 1 ? 's' : '') . ' deleted successfully!');
    }
}
