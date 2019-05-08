<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
   
   //fillable for must assign
    protected $fillable =['user_id','phone','address'];
    /**
     * Get the user that owns the profile by relationship one to one 
     * profile belongs to a user
     */

     public function user(){
         return $this->belongsTo('App\User');
         //return $this->belongsTo(User::class); the same
     }

}
