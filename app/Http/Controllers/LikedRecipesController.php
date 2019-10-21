<?php

namespace App\Http\Controllers;

use App\Like;
use App\Recipe;
use Illuminate\Http\Request;

class LikedRecipesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $likedRecipesIds = Like::whereUserId(auth()->id())->get(['likeable_id'])->values()->toArray();

        return Recipe::find($likedRecipesIds);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Recipe $recipe
     * @return void
     */
    public function store(Recipe $recipe)
    {
        return $recipe->like();
    }

    /**
     * Display the specified resource.
     *
     * @param Recipe $recipe
     * @return void
     */
    public function show(Recipe $recipe)
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
        //
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
        //
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
