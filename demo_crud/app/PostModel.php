<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
     protected $table = 'post';
     protected $primaryKey = 'id';
     protected $fillable = [
         'title',
         'description'
     ];
}
