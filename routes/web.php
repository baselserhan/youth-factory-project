<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Front\SiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Site pages
Route::get('/', [SiteController::class, 'index'])->name('homepage');
Route::get('/about-us', [SiteController::class, 'about'])->name('about');
Route::get('/our-products', [SiteController::class, 'products'])->name('products');
Route::get('/single-product', [SiteController::class, 'productDetails'])->name('productDetails');
Route::get('/shop', [SiteController::class, 'shop'])->name('shop');
Route::get('/cart', [SiteController::class, 'cart'])->name('cart');
Route::get('/checkout', [SiteController::class, 'checkout'])->name('checkout');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');


// Auth
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Google login
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);
