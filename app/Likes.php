<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    protected $guarded = [];

    public function likesUser(){
        return $this->belongsTo(User::class);
    }

    public function likesComment(){
        return $this->belongsTo(Comment::class);
    }
}
