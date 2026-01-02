<?php

use App\Http\Controllers\AdminDetailsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::latest()->take(4)->get();
    $blogs = Blog::latest()->take(3)->get();
    return view('welcome', compact('products', 'blogs'));
})->name('home');

Route::prefix('/frontend')->group(function () {
    Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
    Route::get('/our-products', [FrontendController::class, 'ourProducts'])->name('frontend.our-products');
    Route::get('/our-products/{id}', [FrontendController::class, 'productDetails'])->name('frontend.product-details');
    Route::get('/our-services', [FrontendController::class, 'ourServices'])->name('frontend.our-services');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/filtered-data', [DashboardController::class, 'getFilteredData'])->middleware(['auth', 'verified'])->name('dashboard.filtered-data');

Route::middleware('auth')->group(function () {

    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('products.index');
        Route::get('/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('/store', [ProductController::class, 'store'])->name('products.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
        Route::post('/update/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('products.delete');
        Route::delete('/bulk-delete', [ProductController::class, 'bulkDelete'])->name('products.bulk-delete');
        Route::get('/api/products-by-category', [ProductController::class, 'getProductsByCategory'])->name('api.products-by-category');
        
        Route::prefix('/categories')->group(function () {
            Route::get('/', [ProductCategoryController::class, 'productCategories'])->name('categories.index');
            Route::get('/create', [ProductCategoryController::class, 'create'])->name('categories.create');
            Route::post('/store', [ProductCategoryController::class, 'store'])->name('categories.store');
            Route::get('/edit/{id}', [ProductCategoryController::class, 'edit'])->name('categories.edit');
            Route::post('/update/{id}', [ProductCategoryController::class, 'update'])->name('categories.update');
            Route::get('/delete/{id}', [ProductCategoryController::class, 'destroy'])->name('categories.delete');
            Route::post('/update-order', [ProductCategoryController::class, 'updateOrder'])->name('categories.update-order');
            Route::delete('/bulk-delete', [ProductCategoryController::class, 'bulkDelete'])->name('categories.bulk-delete');
        });
    });

    Route::prefix('/admin/details')->group(function () {
        Route::get('/', [AdminDetailsController::class, 'index'])->name('admin.details');
        Route::get('/edit', [AdminDetailsController::class, 'edit'])->name('admin.details.edit');
        Route::post('/update', [AdminDetailsController::class, 'update'])->name('admin.details.update');
    });

    Route::prefix('/admin')->group(function () {
        Route::get('/contacts', [ContactController::class, 'contacts'])->name('contacts.index');
        Route::get('/delete/{id}', [ContactController::class, 'destroy'])->name('contacts.delete');
        Route::delete('/bulk-delete', [ContactController::class, 'bulkDelete'])->name('contacts.bulk-delete');
    });

    Route::prefix('blogs')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
        Route::get('/create', [BlogController::class, 'create'])->name('blogs.create');
        Route::post('/store', [BlogController::class, 'store'])->name('blogs.store');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
        Route::post('/update/{id}', [BlogController::class, 'update'])->name('blogs.update');
        Route::get('/delete/{id}', [BlogController::class, 'destroy'])->name('blogs.delete');
        Route::delete('/bulk-delete', [BlogController::class, 'bulkDelete'])->name('blogs.bulk-delete');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
