<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('/frontend')->group(function () {
    Route::get('/about', [FrontendController::class, 'about'])->name('frontend.about');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
    Route::get('/our-products', [FrontendController::class, 'ourProducts'])->name('frontend.our-products');
    Route::get('/our-services', [FrontendController::class, 'ourServices'])->name('frontend.our-services');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
