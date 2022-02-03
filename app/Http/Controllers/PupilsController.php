<?php

namespace App\Http\Controllers;

use App\Models\pupil;
use Illuminate\Http\Request;

class PupilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function regForm()
    {
        $pupil = pupil::latest()->paginate(5);
        return view('pupil.regForm', compact('pupil'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pupil.regForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
              
            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => 'required',
            'code' => 'required',
              
        ]);

        pupil::create($request->all());

        return redirect()->route('pupil.regForm')
            ->with('success', 'Pupil created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pupil  $pupil
     * @return \Illuminate\Http\Response
     */
    public function show(pupil $pupil)
    {
        return view('pupil.list',compact('pupil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pupil  $pupil
     * @return \Illuminate\Http\Response
     */
    public function edit(pupil $pupil)
    {
        return view('pupil.edit',compact('pupil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pupil  $pupil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pupil $pupil)
    {
        $request->validate([
            
            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => 'required',
            'code' => 'required'

        ]);
        $pupil->update($request->all());

        return redirect()->route('pupil.regForm')
            ->with('success', 'Pupil updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pupil  $pupil
     * @return \Illuminate\Http\Response
     */
    public function destroy(pupil $pupil)
    {
        $project->delete();

        return redirect()->route('pupil.regForm')
            ->with('success', 'Pupil deleted successfully');
    }
}
