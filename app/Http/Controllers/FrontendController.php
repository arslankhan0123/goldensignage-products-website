<?php

namespace App\Http\Controllers;

use App\Models\AdminDetail;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function about()
    {
        $adminDetails = AdminDetail::first();
        return view('frontend.about.index', compact('adminDetails'));
    }

    public function management()
    {
        $adminDetails = AdminDetail::first();
        return view('frontend.management.index', compact('adminDetails'));
    }

    public function contact()
    {
        $adminDetails = AdminDetail::first();
        return view('frontend.contact.index', compact('adminDetails'));
    }

    public function ourProducts(Request $request)
    {
        $query = Product::query();

        if ($request->has('category') && $request->category) {
            $query->where('category_id', $request->category);
        }

        $products = $query->latest()->get();
        $adminDetails = AdminDetail::first();
        return view('frontend.our-products.index', compact('products', 'adminDetails'));
    }

    public function productDetails($id)
    {
        $product = Product::findOrFail($id);
        $adminDetails = AdminDetail::first();
        $recent_products = Product::where('id', '!=', $id)->where('category_id', $product->category_id)->latest()->take(4)->get();
        return view('frontend.our-products.details', compact('product', 'recent_products', 'adminDetails'));
    }

    public function ourServices()
    {
        $services = Service::latest()->get();
        $adminDetails = AdminDetail::first();
        return view('frontend.our-services.index', compact('services', 'adminDetails'));
    }

    public function contactDetailStore(Request $request)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'msg_subject'  => 'required|string|max:255',
            'message'      => 'required|string',
        ]);

        Contact::create($request->only([
            'name',
            'email',
            'phone_number',
            'msg_subject',
            'message',
        ]));

        return back()->with('success', 'Message sent successfully!');
    }
}
