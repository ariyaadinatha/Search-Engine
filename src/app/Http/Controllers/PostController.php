<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use File;

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

        $content = File::get($document);
        
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $content,
            'document_title' => $documentName,
            'document' => $documentUrl,
            'image' => $imageUrl,
        ]);

        return redirect()->to('/post/');
    }


    public function create(){
        return view("post.postCreate");
    }

    public function show(Post $post)
    {
        $post = Post::find($post->id);
        return view('post.postSingle', ['post' => $post]);
    }
}
