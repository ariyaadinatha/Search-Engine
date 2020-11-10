@extends('template.section')

@section('content')


<div class="container">
    <div class="row">
        
        <!-- loop dari sini -->
        @foreach($posts as $post)
        <div class="col-sm-6">
            <div class="card bg-dark text-white ">
                <img class="card-img rounded" src="/{{$post->image}}" alt="Card image" style="height:12vw;">
                <div class="card-img-overlay d-flex align-items-end transparent rounded">
                    <div class="#">
                        <a href="/post/{{$post->id}}"> <h5 class="card-title">{{$post->title}}</h5> </a>
                        <p class="card-text">{{$post->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- sampai sini -->






        

    </div>
</div>

@endsection