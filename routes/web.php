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

Route::get('/regis','UserController@index');
Route::post('/registerpage','UserController@store');
Route::get('/show','UserController@show');
Route::get('/editdata/{id}','UserController@update');
Route::get('/deletedata/{id}','UserController@delete');
