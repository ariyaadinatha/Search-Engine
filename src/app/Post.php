<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description', 'content', 'document_title', 'document', 'image', 'kalimat_pertama','jumlah_kata'];

    public function search()
    {
        return $this->belongsTo(Search::class);
    }

    public function result()
    {
        return $this->belongsTo(Result::class);
    }
}


