<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
//   protected $table = "Comment";

protected $fillable = [
    'title','body','user_id'
];

static function lastRecord(){
    return Comment::all()->last();
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
