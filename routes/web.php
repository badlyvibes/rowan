<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'TreesController@index');
Route::post('/add_common_name', 'CommonNameController@add');

Route::get('/search/tree/', ['as' => 'search', 'uses' => 'TreesController@getTreeSearch']);
Route::get('/search/common_name/', 'TreesController@getCommonNameSearch');

Route::post('/search/tree', 'TreesController@postTreeSearch');
Route::post('/search/common_name', 'TreesController@postCommonNameSearch');

Route::get('/search/tree/{search}', 'TreesController@getTreeSearch');
Route::get('/search/common_name/{search}', 'TreesController@getCommonNameSearch');

Route::get('/tree/{tree}', 'TreesController@show');
Route::get('/genus/{genus}', 'TreesController@showGenus');
Route::get('/genus/{genus}/species/{species}', 'TreesController@showSpecies');
