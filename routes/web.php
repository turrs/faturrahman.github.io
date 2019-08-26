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
    return view('home');
});
Route::post('/register','AuthController@postRegister')->middleware('guest');
Route::get('/register','AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/login','AuthController@postLogin')->name('login')->middleware('guest');
Route::get('/login','AuthController@getLogin')->middleware('guest')->name('login');
Route::get('/dashboard',function(){
	return view('template/dashboard');
	})->middleware('auth')->name('dashboard');
Route::get('/logout','AuthController@logout')->middleware('auth')->name('logout');
Route::get('/home', function () {
    return view('home');
});
