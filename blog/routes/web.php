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
Route::get('/home', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/customer', function () {
    return view('pages.customer');
});

Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/navbar', function () {
    return view('inc.navbar');
});

Route::get('/hello/{id}/{name?}', function ($id,$name='virak') {
    //   echo "Age:".$age."name".$name;
      return 'Hello'.$id.'<h2>Name: '.$name.'</h2>';
 });


Route::get('/hello/{id}/{name?}', function ($id,$name='virak') {
    //   echo "Age:".$age."name".$name;
      return 'Hello'.$id.'<h2>Welcome: '.$name.'</h2>';
 });

 Route::get('/about','PagesController@about');
 Route::get('/service','PagesController@servicess');
 Route::get('/index','PagesController@index');
 Route::get('/customer','PagesController@customer');



 Route::get('/comment','CommentController@comment');
 Route::post('/store','CommentController@stores');
 Route::get('/createComment','CommentController@showCreate');

 Route::get('/editComment/{id}','CommentController@editComment');
 //edite request 
 Route::patch('/update/{id}','CommentController@update');
 // delete request 
 Route::get('delete/{id}','CommentController@delete');
 Route::Resource('/post','PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Sendmail', 'HomeController@Sendmail');

Route::get('/showUpload', 'UploadController@showUploadForm');
Route::post('/upload', 'UploadController@upload');



