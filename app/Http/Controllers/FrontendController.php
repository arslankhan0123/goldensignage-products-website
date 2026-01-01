<?php

namespace App\Http\Controllers;

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
        return view('frontend.our-products.index');
    }

    public function ourServices()
    {
        return view('frontend.our-services.index');
    }
}
