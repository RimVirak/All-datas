<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $tatle = "posts";
    public $primaryKey = 'id';
    public $timestamp = true;
}
