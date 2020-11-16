<?php
use App\Post;
?>
@extends('template.section')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="display-4"> Hasil Pencarian : {{$search->search}} </h3>
        @if(!$posts->isEmpty())
            @foreach($hasilSearch as $hasil)
            <?php
                $hasilPosts = Post::where('id', $hasil->post_id)
                                    ->first();
            ?>
            <div class="col-sm-12">
                <div class="card bg-dark text-white ">
                    <img class="card-img rounded" src="/{{$hasilPosts->image}}" alt="Card image" style="height:20vw;">
                    <div class="card-img-overlay d-flex align-items-end transparent rounded">
                        <div class="#">
                            <a href="/post/{{$hasil->post_id}}"> <h5 class="card-title">{{$hasilPosts->title}}</h5> </a>
                            <p class="card-text">{{$hasilPosts->description}}</p>
                            <p class="card-text">{{$hasilPosts->jumlah_kata}} words </p>
                            <p class="card-text">"{{$hasilPosts->kalimat_pertama}}"</p>
                            <p class="card-text">{{$hasil->similarity}} % </p>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="vertical-center text-center">
            <h1 class="display-4"> No Post... </h1>
            </div>
        @endif

    </div>
</div>

@endsection