<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/test', function(){
   return "Hello secret";
})->middleware('password.confirm');
