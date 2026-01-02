<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\Blog;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCategories = ProductCategory::count();
        $totalMainProducts = Product::whereNull('parent_id')->count();
        $totalChildProducts = Product::whereNotNull('parent_id')->count();
        $totalBlogs = Blog::count();

        return view('dashboard', compact(
            'totalCategories',
            'totalMainProducts',
            'totalChildProducts',
            'totalBlogs'
        ));
    }

    public function getFilteredData(Request $request)
    {
        $period = $request->get('period', 'all');
        
        $startDate = null;
        if ($period === 'week') {
            $startDate = Carbon::now()->subWeek();
        } elseif ($period === '2weeks') {
            $startDate = Carbon::now()->subWeeks(2);
        } elseif ($period === 'month') {
            $startDate = Carbon::now()->subMonth();
        }

        $queryCategories = ProductCategory::query();
        $queryMainProducts = Product::whereNull('parent_id');
        $queryChildProducts = Product::whereNotNull('parent_id');
        $queryBlogs = Blog::query();

        if ($startDate) {
            $queryCategories->where('created_at', '>=', $startDate);
            $queryMainProducts->where('created_at', '>=', $startDate);
            $queryChildProducts->where('created_at', '>=', $startDate);
            $queryBlogs->where('created_at', '>=', $startDate);
        }

        return response()->json([
            'categories' => $queryCategories->count(),
            'mainProducts' => $queryMainProducts->count(),
            'childProducts' => $queryChildProducts->count(),
            'blogs' => $queryBlogs->count(),
        ]);
    }
}
