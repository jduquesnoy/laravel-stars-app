<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles.index', [
            'articles' => Star::all()
        ]);
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
    public function store(Request $request)
    {
        $star = $request->user()->stars()->create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'description' => $request->input('description'),
            'photo' => $request->input('photo'),
        ]);
        return redirect()->route('stars.show', [$star]);//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Star $star)
    {
        return view('stars.show', [
            'star' => $star
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Star $star)
    {
        return view('stars.edit', [
            'star' => $star
        ]);
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
        $article->update([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'description' => $request->input('description'),
            'photo' => $request->input('photo'),
        ]);
        return redirect()->route('articles.show', [$article]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
