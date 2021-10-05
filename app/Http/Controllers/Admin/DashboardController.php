<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DashboardController extends Controller
{
    public function index()
    {
        $products_count = Product::all()->count();
        $categories_count = Category::all()->count();
        $users_count = User::all()->count();
        $posts_count = Post::all()->count();
        $galleries_count = Image::all()->count();
        $sliders_count = Slider::all()->count();
        $testimonials_count = Testimonial::all()->count();
        $teams_count = Team::all()->count();
        return view('admin.index', compact('products_count', 'categories_count', 'users_count', 'posts_count', 'galleries_count', 'sliders_count', 'testimonials_count', 'teams_count'));
    }
}
