<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index','UserController@index');
Route::post('/store','UserController@store');
Route::get('/view','UserController@view');
Route::get('/edit/{id}','UserController@edit');
Route::put('/update/{id}','UserController@update');
Route::delete('/delete/{id}','UserController@delete');
