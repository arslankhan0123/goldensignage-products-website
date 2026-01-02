<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('backend.services.index', compact('services'));
    }

    public function create()
    {
        return view('backend.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'short_description' => 'nullable|string',
            'long_description' => 'nullable|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $publicPath = public_path('images/services');
            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0755, true);
            }
            $image->move($publicPath, $imageName);
            $validated['image'] = 'images/services/' . $imageName;
        }

        Service::create($validated);

        return redirect()->route('services.index')
            ->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'short_description' => 'nullable|string',
            'long_description' => 'nullable|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            if ($service->image && file_exists(public_path($service->image))) {
                unlink(public_path($service->image));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $publicPath = public_path('images/services');
            if (!file_exists($publicPath)) {
                mkdir($publicPath, 0755, true);
            }
            $image->move($publicPath, $imageName);
            $validated['image'] = 'images/services/' . $imageName;
        }

        $service->update($validated);

        return redirect()->route('services.index')
            ->with('success', 'Service updated successfully.');
    }
}
