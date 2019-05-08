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
//file that identify file
// "/" is place that rout
//welcome is name that represent to view
Route::get('/', function () {
 return view('welcome');
   //return ("hello world");
});

Route::get('/about', function () {
    
      return view("pages.about");
   });
   Route::get('/service', function () {
    
    return view("pages.service");
 });
 Route::get('/service', function () {
    
   return view("pages.service");
});
Route::get('/navbar', function () {
    
   return view("inc.navbar");
});
Route::get('/index', function () {
    
   return view("pages.index");
});

Route::get('/about', function () {
    
   return view("pages.about");
});
//requir parameter
Route::get('/edit/{id}', function ($id) {
    echo 'id'.$id;
   //return view("pages.service");
});

//optional parameter need to 
Route::get('/edit/{id?}', function ($id=22) {
   echo 'id'.$id;
  //return view("pages.service");
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/me/{name},{age?}', function ($name,$age=21) {
   echo 'I am '.$name.", I'm ".$age;
  //return view("pages.service");
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/main', 'PagesController@callindex');
Route::get('/about', 'PagesController@about');


Route::get('/service', 'PagesController@arrayTest');
Route::get('/showLast','PagesController@showLast');
Route::get('/showLast', 'PagesController@showLast()');


