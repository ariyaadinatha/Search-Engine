<?php

namespace App\Http\Controllers;


use App\Search;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\InputStream;
use Symfony\Component\Process\Exception\ProcessFailedException;

class SearchController extends Controller
{
    public function term()
    {
       
        $posts=Post::get();
        return view('search.termIndex', ['posts' => $posts]);
        
    }

    public function store(Request $request)
    {
        $search = $request->search;
        $slug = str_slug($search, '-');

        $posts=Post::get();

        foreach ($posts as $post)
        {
            $process = new Process(['/usr/bin/python3', ''. public_path() .'/script/similarity.py',"{$search}","{$post->document_title}"]); // ngelempar input
            $process->run();
            
            // executes after the command finishes
            if (!$process->isSuccessful()) {
                throw new ProcessFailedException($process);
            }
    
            $similarity = $process->getOutput();

            echo $similarity;

            Search::create([
                'post_id' => $post->id,
                'search' => $search,
                'search_slug' => $slug,
                'similarity' => (float)$similarity,
            ]);
        }
        return redirect()->to("/search/{$slug}");
    }

    public function show(Search $search)
    {
        $posts=Post::get();
        $hasilSearch = Search::where('search_slug', $search->search_slug)
                            ->orderBy('similarity', 'desc')
                            ->get();

        return view('search.searchIndex', ['search' => $search,
                                            'posts' => $posts,
                                            'hasilSearch' => $hasilSearch]);
    }
}
