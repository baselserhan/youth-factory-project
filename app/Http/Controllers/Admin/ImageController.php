<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::orderBy('id', 'desc')->paginate(5);
        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {
        // upload file
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_name = rand() . '_' . time() . '.' . $ex;
        $request->file('image')->move(public_path('uploads'), $new_name);

        // save Image
        $image = Image::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $new_name,
        ]);

        if ($image) {

            Alert::success('Success', 'Image has been added successfully');
            return redirect()->route('admin.galleries.index')->with('success', 'Image has been added');
        } else {
            return redirect()->route('admin.galleries.index')->with('error', 'Image has not been added');
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
        $image = Image::find($id);
        return view('admin.images.edit', compact('image'));
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
            'name' => 'required',
            'description' => 'required',
            'image' => 'image',
        ]);

        $image = Image::find($id);
        $new_name = $image->image;
        if ($request->has('image')) {
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_name = rand() . '_' . time() . '.' . $ex;
            $request->file('image')->move(public_path('uploads'), $new_name);
        }

        $image = $image->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $new_name,
        ]);

        if ($image) {
            Alert::success('Success', 'Image has been updated successfully');
            return redirect()->route('admin.galleries.index')->with('success', 'Image has been updated');
        } else {
            return redirect()->route('admin.galleries.index')->with('error', 'Image has not been updated');
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
        $image = Image::find($id);

        unlink(public_path('uploads/' . $image->image));
        $image->delete();

        return redirect()->route('admin.galleries.index')->with('success', 'Image has been deleted');
    }
}
