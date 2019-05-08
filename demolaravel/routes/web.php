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

Route::get('/', 'PagesController@index');


// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/about',function(){
//     return view('page.about');
// });

Route::get('/about', 'PagesController@about');

// Route::get('/service',function(){
//     return view('page.service');
// });
Route::get('/service', 'PagesController@service');

Route::resource('posts','PostsController');

// Route::resource;
// Auth::routes();


// Route::get('/about/{id}/{name}',function($id,$name){
//     return "Here is id =".$id." and name is ".$name;
// });

// Route::get('/service/{id}/{name}',function($id,$name){
//     return "Here is id =".$id." and name is ".$name;
// });

// Route::get('/about/{id}',function($id){
//     return "Here is id =".$id;
// });