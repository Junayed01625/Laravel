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
    return view('pages.index');
});

Route::get('contact/us','HelloController@contact')->name('contact');
Route::get('about/us','HelloController@about')->name('about');
Route::get('post/us','BoloController@post')->name('post');
//category crud are here
Route::get('add_category','BoloController@add_category')->name('add_category');
Route::post('store_category','BoloController@store_category')->name('store_category');
