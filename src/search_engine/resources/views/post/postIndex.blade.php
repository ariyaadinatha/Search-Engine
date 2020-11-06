@extends('template.main')

@section('content')
<header id="header">
    <div class="container-fluid">
    
        <nav class="navbar navbar-dark bg-dark justify-content-between">
          <a href="/landing" class="navbar-brand">Search Engine</a>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </nav>
    
    </div>
</header>

<div class="container">
    <div class="row">
        
        <!-- loop dari sini -->
        @foreach($posts as $post)
        <div class="col-sm-6">
            <div class="card bg-dark text-white ">
                <img class="card-img rounded" src="{{asset('storage/app/'.$post->image)}}" alt="Card image" style="height:12vw;">
                <div class="card-img-overlay d-flex align-items-end transparent rounded">
                    <div class="#">
                        <h5 class="card-title">{{$post->title}}</h5>
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