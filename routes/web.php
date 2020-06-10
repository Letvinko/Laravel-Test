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

Route::get('/',function(){
  return view('content.aboard');
});
Route::get('/login', 'userloginController@index');
Route::get('/register', 'userRegistController@index');
Route::post('/register','userRegistController@register');
Route::post('/login','userloginController@login');
Route::get('/dashboard','userPageController@SHowUser');
Route::get('/Delete','userPageController@Delete');
Route::get('/edit','userEditcontroller@updatePage');
Route::post('/edit','userEditcontroller@updateData');
Route::get('/logout','userPageController@logout');
