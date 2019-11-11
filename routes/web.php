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

Route::get('/demo_url', 'DemoController@test');   // (url, controller_name@method_name)
Route::get('/', 'TargetController@index');

Route::get('/create', 'TargetController@create');
Route::post('/create', 'TargetController@store');

Route::get('/edit/{target}', 'TargetController@edit');
Route::put('/edit/{target}', 'TargetController@update');

Route::get('/delete/{target}', 'TargetController@delete');
