<?php

use Illuminate\Filesystem\Filesystem;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('product', 'Postcontroller');

Route::patch('specs/{specs}', 'ProjectSpecsController@update');
Route::post('product/{project}/specs', 'ProjectSpecsController@store');



