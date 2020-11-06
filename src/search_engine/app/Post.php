<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'description', 'document_title','document', 'image',
    ];

    public function show()
    {
        //
    }

    public function store()
    {
        //
    }

}
