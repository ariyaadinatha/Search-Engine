@extends('template.section')

@section('content')

<div class="container">
    <div class="card bg-dark">
      <img class="card-img-top" src="/{{$post->image}}" alt="Card image cap">
      <div class="card-body ">
        <h5 class="card-title"> <b> {{$post->title}} </b> </h5>
        <p class="card-text">{{$post->content}}</p>
        <p class="card-text"><small class="text-muted">Created : {{$post->created_at}}</small></p>
      </div>
    </div>

</div>


@endsection