@extends('template.section')

@section('content')

<?php
use App\Post;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\InputStream;
use Symfony\Component\Process\Exception\ProcessFailedException;
?>
@extends('template.section')

@section('content')

<div class="container">
    <div class="row">
        <div class='col-sm-12'>
            <h3 class="display-4 pb-4 pt-3"> Term Table </h3>
        </div>
        
        @if(!$searchs->isEmpty())
            @foreach($searchs as $search)
                <?php
                    $post=Post::where('id', $search->post_id)
                                ->first();


                    //Buat hitung freq
                    $countFreq = new Process(['/usr/bin/python3', ''. public_path() .'/script/countFreq.py',"{$post->document_title}","{$search->search}"]); // ngelempar input
                    $countFreq->run(); // judul query
                    
                    // executes after the command finishes
                    if (!$countFreq->isSuccessful()) {
                        throw new ProcessFailedException($countFreq);
                    }
            
                    $hasilCountFreq = $countFreq->getOutput();
                    echo "<div class='col-sm-6 pt-3'>";
                    echo $search->search;
                    echo "<br>";
                    echo $post->document_title;
                    echo "<br>";
                    echo "<table>";
                    echo $hasilCountFreq;
                    echo "</table>";
                    echo "</div>";
                    echo "<br>";
                    // sampai sini
                ?>
            @endforeach

        @else
            <div class="vertical-center text-center">
            <h1 class="display-4"> No Post... </h1>
            </div>
        @endif

    </div>
</div>

@endsection

@endsection