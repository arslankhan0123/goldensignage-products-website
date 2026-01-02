<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function about()
    {
        return view('frontend.about.index');
    }

    public function contact()
    {
        return view('frontend.contact.index');
    }

    public function ourProducts()
    {
        $products = Product::latest()->get();
        return view('frontend.our-products.index', compact('products'));
    }

    public function productDetails($id)
    {
        $product = Product::findOrFail($id);
        $recent_products = Product::where('id', '!=', $id)->latest()->take(4)->get();
        return view('frontend.our-products.details', compact('product', 'recent_products'));
    }

    public function ourServices()
    {
        return view('frontend.our-services.index');
    }
}
