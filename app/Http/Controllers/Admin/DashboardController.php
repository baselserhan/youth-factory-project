<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products_count = Product::all()->count();
        $categories_count = Category::all()->count();
        $users_count = User::all()->count();
        // $order = Order::all()->count();
        return view('admin.index', compact('products_count', 'categories_count', 'users_count'));
    }
}
