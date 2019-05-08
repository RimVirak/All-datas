<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class Pagecontroller extends Controller
{
    public function index(){
        $fruits = Page::fruits();
        return view('index',['fruits'=>$fruits]);
    }
}
