<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Front\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Site pages
Route::get('/', [SiteController::class, 'index'])->name('homepage');
Route::get('/about-us', [SiteController::class, 'about'])->name('about');
Route::get('/our-products', [SiteController::class, 'products'])->name('products');
Route::get('/single-product/{id}', [SiteController::class, 'productDetails'])->name('productDetails');
Route::get('/blog', [SiteController::class, 'news'])->name('news');
Route::get('/blog/{slug}', [SiteController::class, 'newsDetails'])->name('newsDetails');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::post('/contact', [SiteController::class, 'contactSubmit'])->name('contactSubmit');
Route::post('/add-comment', [SiteController::class, 'store'])->name('store');


// Auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
