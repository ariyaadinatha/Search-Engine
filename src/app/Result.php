<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function search()
    {
        return $this->belongsTo(Search::class);
    }
}
