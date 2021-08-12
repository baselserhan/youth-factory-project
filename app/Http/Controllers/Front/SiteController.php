<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        $products = Product::latest()->with('category')->simplePaginate(10);
        return view('front.index', compact('products'));
    }
    public function about()
    {
        return view('front.about');
    }
    public function products()
    {
        return view('front.our-products');
    }
    public function productDetails()
    {
        return view('front.single-product');
    }
    public function shop()
    {
        return view('front.shop');
    }
    public function cart()
    {
        return view('front.cart');
    }
    public function checkout()
    {
        return view('front.checkout');
    }
    public function contact()
    {
        return view('front.contact');
    }
}
