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
    public function search()
    {
       
        $posts=Post::get();
        /*
        $text = "eek bau"; // input masuk sini
        $text2 = "ngocok"; // input masuk sini

         $process = new Process(['python', ''. public_path() .'/script/test.py',"{$text}","{$text2}"]); // ngelempar input
       

    
        //$process = new Process("python3 /Path/To/analyse_string.py \"{$text}\"");
        $process->run();
    
        
        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();

        */

        return view('search.searchTest', ['posts' => $posts]);
        

    }

    public function store(Request $request)
    {
        $search = $request->search;
        $slug = str_slug($search, '-');
        Search::create([
            'search' => $search,
            'search_slug' => $slug,
        ]);

        return redirect()->to("/search/{$slug}");
    }

    public function show(Search $search)
    {
        $posts=Post::get();

        return view('search.searchIndex', ['search' => $search,
                                            'posts' => $posts]);
    }
}
