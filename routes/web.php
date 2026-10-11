<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

// Frontend Menu Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/approach', [HomeController::class, 'approach'])->name('approach');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/impact', [HomeController::class, 'impact'])->name('impact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/donate', [HomeController::class, 'donate'])->name('donate');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [HomeController::class, 'blogShow'])->name('blog.show');

// E-Commerce Shop Routes
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/checkout', [ShopController::class, 'checkout'])->name('shop.checkout');
Route::post('/shop/checkout', [ShopController::class, 'processCheckout'])->name('shop.checkout.process');
Route::get('/checkout', [ShopController::class, 'checkout'])->name('checkout');
Route::get('/shop/{slug}', [ShopController::class, 'show'])->name('shop.show');

