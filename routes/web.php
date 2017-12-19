<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/trees', 'TreesController@index');
Route::get('/tree/{tree}', 'TreesController@show');
Route::get('/genus/{genus}', 'TreesController@showGenus');
Route::get('/genus/{genus}/species/{species}', 'TreesController@showSpecies');
