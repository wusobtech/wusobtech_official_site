<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComments extends Model
{
    protected $guarded = [];

    public function user (){
        return $this->belongsTo(User::class);
    }

    public function blog (){
        return $this->belongsTo(Blog::class);
    }

    public function comments (){
        return $this->hasMany(BlogComments::class);
    }
}
