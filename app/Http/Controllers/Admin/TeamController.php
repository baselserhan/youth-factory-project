<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('id', 'desc')->limit(3)->get();
        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        // upload file
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_name = rand() . '_' . time() . '.' . $ex;
        $request->file('image')->move(public_path('uploads'), $new_name);

        // save Image
        $teams = Team::create([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $new_name,
        ]);

        if ($teams) {

            Alert::success('Success', 'Team has been added successfully');
            return redirect()->route('admin.teams.index')->with('success', 'Team has been added');
        } else {
            return redirect()->route('admin.teams.index')->with('error', 'Team has not been added');
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
        $team = Team::find($id);
        return view('admin.teams.edit', compact('team'));
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
        ]);

        $team = Team::find($id);
        $new_name = $team->image;
        if ($request->has('image')) {
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_name = rand() . '_' . time() . '.' . $ex;
            $request->file('image')->move(public_path('uploads'), $new_name);
        }

        $team = $team->update([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $new_name,
        ]);

        if ($team) {
            Alert::success('Success', 'Team has been updated successfully');
            return redirect()->route('admin.teams.index')->with('success', 'Team has been updated');
        } else {
            return redirect()->route('admin.teams.index')->with('error', 'Team has not been updated');
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
        $team = Team::find($id);

        unlink(public_path('uploads/' . $team->image));
        $team->delete();

        return redirect()->route('admin.teams.index')->with('success', 'Team has been deleted');
    }
}
