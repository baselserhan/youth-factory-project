<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use RealRashid\SweetAlert\Facades\Alert;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->limit(5)->get();
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        // upload file
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_name = rand() . '_' . time() . '.' . $ex;
        $request->file('image')->move(public_path('uploads'), $new_name);

        // save Image
        $slider = Slider::create([
            'subtitle' => $request->subtitle,
            'caption' => $request->caption,
            'image' => $new_name,
        ]);

        if ($slider) {

            Alert::success('Success', 'Slider has been added successfully');
            return redirect()->route('admin.sliders.index')->with('success', 'Slider has been added');
        } else {
            return redirect()->route('admin.sliders.index')->with('error', 'Slider has not been added');
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
        $slider = Slider::find($id);
        return view('admin.sliders.edit', compact('slider'));
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
            'subtitle' => 'required',
            'caption' => 'required',
            'image' => 'image',
        ]);

        $slider = Slider::find($id);
        $new_name = $slider->image;
        if ($request->has('image')) {
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_name = rand() . '_' . time() . '.' . $ex;
            $request->file('image')->move(public_path('uploads'), $new_name);
        }

        $slider = $slider->update([
            'subtitle' => $request->subtitle,
            'caption' => $request->caption,
            'image' => $new_name,
        ]);

        if ($slider) {
            Alert::success('Success', 'Slider has been updated successfully');
            return redirect()->route('admin.sliders.index')->with('success', 'Slider has been updated');
        } else {
            return redirect()->route('admin.sliders.index')->with('error', 'Slider has not been updated');
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
        $slider = Slider::find($id);

        unlink(public_path('uploads/' . $slider->image));
        $slider->delete();

        return redirect()->route('admin.sliders.index')->with('success', 'Slider has been deleted');
    }
}
