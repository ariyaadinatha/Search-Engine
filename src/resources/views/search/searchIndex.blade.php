<?php
use Symfony\Component\Process\Process;
use Symfony\Component\Process\InputStream;
use Symfony\Component\Process\Exception\ProcessFailedException;
?>


Hasil Pencarian : {{$search->search}}
<br>
<br>

@foreach ($posts as $post)
    <?php
        $process = new Process(['/usr/bin/python3', ''. public_path() .'/script/similarity.py',"{$search->search}","{$post->document_title}"]); // ngelempar input
        $process->run();
        
        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $similarity = $process->getOutput();
    ?> 


    Judul Dokumen : {{$post->title}}
    Jumlah Kata : {{$post->jumlah_kata}}
    Kalimat Pertama : "{{$post->kalimat_pertama}}"
    Similarity : {{$similarity}} %
    <br>
    <br>
@endforeach