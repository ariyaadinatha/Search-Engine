<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;
use App\Post;
use File;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\InputStream;
use Symfony\Component\Process\Exception\ProcessFailedException;


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
        $documentUrl = $document->storeAs("/uploaded/doc", "{$documentName}");
        $content = File::get($document);



        /* ======================
            Fungsi Hitung Kata
        ========================= */
        $hitungKata = new Process(['/usr/bin/python3', ''. public_path() .'/script/hitungKata.py',"{$documentName}"]); // ngelempar input
        $hitungKata->run();
        
        if (!$hitungKata->isSuccessful()) {
            throw new ProcessFailedException($hitungKata);
        }

        $hasilHitungKata = $hitungKata->getOutput();
  
 
        /* ======================
            Fungsi Kata Pertama
        ========================= */
        $kalimatPertama = new Process(['/usr/bin/python3', ''. public_path() .'/script/kalimatPertama.py',"{$documentName}"]); // ngelempar input
        $kalimatPertama->run();
        
        if (!$kalimatPertama->isSuccessful()) {
            throw new ProcessFailedException($kalimatPertama);
        }

        $hasilKalimatPertama = $kalimatPertama->getOutput();
        

        
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $content,
            'document_title' => $documentName,
            'document' => $documentUrl,
            'image' => $imageUrl,
            'kalimat_pertama' => $hasilKalimatPertama,
            'jumlah_kata' => (int)($hasilHitungKata),
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
