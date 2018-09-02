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

// Route::get('/', function () {
//    return view('login');
// });

// Route::post('/','UserController@show');
// Route::view('/','new');
// Route::post('/about','UserController@show');

//  Route::view('/','login');
//  Route::post('/store','UserController@store');
  Route::get('/','UserController@store');
  Route::resource('api/','Api');