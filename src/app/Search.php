<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $table = 'search';
    protected $fillable = ['search', 'search_slug'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
