<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $table = 'searchs';
    protected $fillable = ['post_id','search', 'search_slug','similarity'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
