@extends('template.section')
Hasil Pencarian : {{$search->search}}
<br>
<br>

@foreach ($posts as $post)
    <?php

    ?> 


    Judul Dokumen : {{$post->title}}
    Jumlah Kata : {{$post->jumlah_kata}}
    Kalimat Pertama : "{{$post->kalimat_pertama}}"
    Similarity :  %
    <br>
    <br>
@endforeach