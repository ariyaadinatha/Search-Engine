<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function viewIndex()
    {
        $posts = Post::get();
        return view('post.postIndex', ['posts' => $posts,]);
    }

    public function store(Request $request)
    {
        $image = request()->file('image');
        $imageName = request()->file('image')->getClientOriginalName();
        $imageUrl = $image->storeAs("/uploaded/img", "{$imageName}.{$image->extension()}");

        $document = request()->file('document');
        $documentName = request()->file('document')->getClientOriginalName();
        $documentUrl = $document->storeAs("/uploaded/doc", "{$documentName}.{$document->extension()}");

        
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'document_title' => $documentName,
            'document' => $documentUrl,
            'image' => $imageUrl,
        ]);

        return redirect()->to('/post/');
    }


    public function create(){
        return view("post.postCreate");
    }
}
