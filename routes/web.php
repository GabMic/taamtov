<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::resource('user', 'UserController');

Route::resource('recipe', 'RecipeController');
//Route::get('/test', function(){
//   return "Hello secret";
//})->middleware('password.confirm');


Route::post('/like/{recipe}', 'LikedRecipesController@store');
Route::get('/liked-recipes', 'LikedRecipesController@index')->name('my-liked-recipes');

Route::delete('/like/{id}', 'LikedRecipesController@destroy');


Route::get('/search', 'SearchController@index');
