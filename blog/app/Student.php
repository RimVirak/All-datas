<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   static function hello(){
       return "Good morning Web2019";
   }
   static function lastRecord(){
    return Student::all()->last();
  }
}
