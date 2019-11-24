<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function index(){
    return Recipe::all(['id','name', 'slug'])->makeHidden(['likes','user']);
  }
}
