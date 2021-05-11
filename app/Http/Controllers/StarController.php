<?php

namespace App\Http\Controllers;
use App\Models\Star;
use Illuminate\Http\Request;

class StarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stars = Star::all();
        return view('stars.index', ['stars'=> $stars]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stars.create');  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Star $star)
    {
        $star->create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'description' => $request->input('description'),
            'photo' => $request->input('photo'),
        ]);
        return redirect()->route('stars.index');//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Star $star)
    {
        return view('stars.show', ['star' => $star]);
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Star $star)
    {
        return view('stars.edit', ['star' => $star ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Star $star)
    {
        $star->update([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'description' => $request->input('description'),
            'photo' => $request->input('photo'),
        ]);
        return redirect()->route('stars.show', [$star]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Star $star)
    {
        $star->delete();
        return redirect()->route('stars.index');
    }
}
