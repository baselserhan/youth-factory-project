<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use App\Models\Team;
use App\Models\Image;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Mail\ContactUsMail;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class SiteController extends Controller
{
    public function index()
    {

        $products = Product::latest()->with('category')->paginate(9);
        $posts = Post::latest()->with('user')->paginate(9);
        $images = Image::latest()->limit(8)->get();
        $sliders = Slider::latest()->limit(5)->get();
        $testimonials = Testimonial::latest()->limit(3)->get();
        return view('front.index', compact('products', 'posts', 'images', 'sliders', 'testimonials'));
    }

    public function about()
    {
        $testimonials = Testimonial::latest()->limit(3)->get();
        $teams = Team::latest()->limit(3)->get();
        return view('front.about', compact('testimonials', 'teams'));
    }

    public function products()
    {
        $products = Product::latest()->with('category')->paginate(6);
        // $categories = Category::all();
        return view('front.our-products', compact('products'));
    }

    public function productDetails($id)
    {
        $product = Product::find($id);

        return view('front.single-product', compact('product'));
    }
    public function news()
    {
        $posts = Post::latest()->with('user')->paginate(6);
        return view('front.news', compact('posts'));
    }
    public function newsDetails($id)
    {
        $post = Post::where('slug', $id)->first();
        $posts = Post::latest()->with('user')->limit(10)->get();
        return view('front.single-news', compact('post', 'posts'));
    }
    public function contact()
    {
        return view('front.contact');
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = $request->except('_token');

        Mail::to('baselserhan1993@gmail.com')->send(new ContactUsMail($data));
    }

    public function search()
    {
        // $search = $request->get('search');
        // $products = Product::where('name', 'like', '%' . $search . '%')->paginate(5);
        // return view('admin.products.index', compact('products'));
        $search_text = $_GET['query'];
        $products = Product::where('name', 'like', '%' . $search_text . '%')->with('category')->with('user')->get();
        return view('front.search', compact('products'));
    }
}
