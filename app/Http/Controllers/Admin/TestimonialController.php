<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\TestimonialRequest;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('id', 'desc')->limit(3)->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
        // upload file
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_name = rand() . '_' . time() . '.' . $ex;
        $request->file('image')->move(public_path('uploads'), $new_name);

        // save Image
        $testimonials = Testimonial::create([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $new_name,
            'quotation' => $request->quotation,
        ]);

        if ($testimonials) {

            Alert::success('Success', 'Testimonial has been added successfully');
            return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial has been added');
        } else {
            return redirect()->route('admin.testimonials.index')->with('error', 'Testimonial has not been added');
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
        $testimonial = Testimonial::find($id);
        return view('admin.testimonials.edit', compact('testimonial'));
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
            'position' => 'required',
            'image' => 'image',
            'quotation' => 'required',
        ]);

        $testimonial = Testimonial::find($id);
        $new_name = $testimonial->image;
        if ($request->has('image')) {
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_name = rand() . '_' . time() . '.' . $ex;
            $request->file('image')->move(public_path('uploads'), $new_name);
        }

        $testimonial = $testimonial->update([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $new_name,
            'quotation' => $request->quotation,
        ]);

        if ($testimonial) {
            Alert::success('Success', 'Testimonial has been updated successfully');
            return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial has been updated');
        } else {
            return redirect()->route('admin.testimonials.index')->with('error', 'Testimonial has not been updated');
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
        $testimonial = Testimonial::find($id);

        unlink(public_path('uploads/' . $testimonial->image));
        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial has been deleted');
    }
}
