<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'news'], function () {
    Route::get('/', 'NewsController@index');
    Route::get('/create', 'NewsController@create');
    Route::post('/create', 'NewsController@store');
    Route::get('/{id}', 'NewsController@show');
    Route::delete('/{id}', 'NewsController@destroy');
    Route::put('/{id}', 'NewsController@update');
});

