<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index(){
    //   return 'INDEX';
    $title = "Welcome To Laravel";
    // return view('page.index',compact('title'));
    return view('page.index')->with("title",$title);
  }
  public function about(){
      // return view('page.about');
      $title  = "About Us ";
      return view('page.about')->with("title",$title);
  }
  public function service(){
    // return view('page.service');
    $data = array(
      'title' =>'serice Page',
      'services'=>['web Design', 'programing','SEO','PHP Besice','UML and UB','Testing']
    );
    return view('page.service')->with($data);
}
}
