<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->with(['user'])->paginate(5);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        // upload file
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_name = rand() . '_' . time() . '.' . $ex;
        $request->file('image')->move(public_path('uploads'), $new_name);

        // save post
        $post = Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'image' => $new_name,
            'user_id' => auth()->user()->id,
        ]);

        if ($post) {

            Alert::success('Success', 'Post has been added successfully');
            return redirect()->route('admin.posts.index')->with('success', 'Post has been added');
        } else {
            return redirect()->route('admin.posts.index')->with('error', 'Post has not been added');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $post = Post::find($id);
        $new_name = $post->image;
        if ($request->has('image')) {
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_name = rand() . '_' . time() . '.' . $ex;
            $request->file('image')->move(public_path('uploads'), $new_name);
        }

        $post = $post->update([
            'title' => $request->title,
            'image' => $new_name,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
        ]);

        if ($post) {
            Alert::success('Success', 'Post has been updated successfully');
            return redirect()->route('admin.posts.index')->with('success', 'Post has been updated');
        } else {
            return redirect()->route('admin.posts.index')->with('error', 'Post has not been updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        unlink(public_path('uploads/' . $post->image));
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Post has been deleted');
    }
}
