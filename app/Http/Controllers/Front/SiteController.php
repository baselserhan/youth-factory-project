<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use App\Models\Product;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index()
    {

        $products = Product::latest()->with('category')->paginate(6);
        $posts = Post::latest()->with('user')->paginate(6);
        return view('front.index', compact('products', 'posts'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function products()
    {
        $products = Product::latest()->with('category')->paginate(6);
        $categories = Category::all();
        return view('front.our-products', compact('products', 'categories'));
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
        $posts = Post::latest()->with('user')->limit(4)->get();
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

    public function store(Post $post, Request $request)
    {
        dd($request->all());
        // $post->comments()->create([
        //     'user_id' => $request->user()->id,
        //     'email' => $request->user()->email,
        //     'message' => $request->message,
        //     'post_id' => $post->id,
        // ]);

        // return back();
    }
}
