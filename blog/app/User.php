<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
   
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
    * Get the profile record asscoiated or relationship by one to one with the user
    *user has one profile
    */

    public function profile(){
        return $this->hasOne('App\Profile');
       //  return $this->hasOne(Profile::class); the same 
    }

    public function posts(){
        return $this->hasMany('App\Post');
       //  return $this->hasMayPost::class); the same 
    }
    public function comments(){
        return $this->hasMany('App\Comment');
       //  return $this->hasMayPost::class); the same 
    }
}
