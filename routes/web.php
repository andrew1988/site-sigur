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
    return view('index');
});

Auth::routes();
Route::middleware(['auth','checkAdmin'])->group(function() {
  Route::get('home',['as'=>'home', 'uses'=>'HomeController@index']);
  Route::get('web-admin',['as'=>'web-admin', 'uses'=>'Admin\Start@index']);
});
