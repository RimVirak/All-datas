<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
        'title','body'
    ];

    static function lastRecord(){
        return Post::all()->last();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    /*

    */
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
