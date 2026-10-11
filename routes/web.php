<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Frontend Menu Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/approach', [HomeController::class, 'approach'])->name('approach');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/impact', [HomeController::class, 'impact'])->name('impact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/donate', [HomeController::class, 'donate'])->name('donate');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
