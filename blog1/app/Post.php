<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    static function lastRecord(){
        return Post::all() -> last();
    }
}
