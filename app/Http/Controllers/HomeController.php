<?php

namespace App\Http\Controllers;

use App\Like;
use JavaScript;
use App\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liked = Recipe::find(Like::whereUserId(auth()->id())->get(['likeable_id'])->values())->pluck('id');

        $recipes = Recipe::wherePublished(1)->take(12)->get();
        return view('home', compact('recipes', 'liked'));
    }
}
