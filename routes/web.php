<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'TreesController@index');
Route::post('/add_common_name', 'CommonNameController@add');
Route::post('/search', 'TreesController@postSearch');
Route::get('/search/{search}', 'TreesController@getSearch');
Route::get('/tree/{tree}', 'TreesController@show');
Route::get('/genus/{genus}', 'TreesController@showGenus');
Route::get('/genus/{genus}/species/{species}', 'TreesController@showSpecies');
