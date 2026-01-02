<?php

namespace App\Http\Controllers;

use App\Models\AdminDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function about()
    {
        $adminDetails = AdminDetail::first();
        return view('frontend.about.index', compact('adminDetails'));
    }

    public function contact()
    {
        $adminDetails = AdminDetail::first();
        return view('frontend.contact.index', compact('adminDetails'));
    }

    public function ourProducts()
    {
        $products = Product::latest()->get();
        $adminDetails = AdminDetail::first();
        return view('frontend.our-products.index', compact('products', 'adminDetails'));
    }

    public function productDetails($id)
    {
        $product = Product::findOrFail($id);
        $adminDetails = AdminDetail::first();
        $recent_products = Product::where('id', '!=', $id)->latest()->take(4)->get();
        return view('frontend.our-products.details', compact('product', 'recent_products', 'adminDetails'));
    }

    public function ourServices()
    {
        $adminDetails = AdminDetail::first();
        return view('frontend.our-services.index', compact('adminDetails'));
    }
}
