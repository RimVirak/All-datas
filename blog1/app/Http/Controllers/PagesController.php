<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function callindex(){
        return view('pages.index');
    }
    public function about(){
        $addValue="addValue 2019";
        return view('pages.about',compact('addValue'));
    }
    public function service(){
        //return view('pages.service');
        $testValue="addValue 2019";
        return view('pages.service') -> with('test',$testValue);
    }
     public function arrayTest(){
        $data = array(
        '0' =>array('1','name' =>'Chandaraty','email'=>'chandaraty@gmail.com'),
        '1' =>array('2','name' =>'Chandaraty','email'=>'chandaraty@gmail.com'),
        '2' =>array('3','name' =>'Chandaraty','email'=>'chandaraty@gmail.com')
     ); 
        return view('pages.service')->with('data',$data);
     }

     public function showLast(){

        $post = \App\post::all();
        return view('pages.post',compact('post'));

     }
    
}
