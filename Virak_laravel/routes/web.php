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
//Route::resource('comment', 'commentController');
//Route::resource('/comment', 'postComment');
Route::resource('/post','postController');
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/create','tagPost');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
