@extends("template.main")

@section('content')

<div class="jumbotron jumbotron-fluid vertical-center">
  <div class="container">
    <h1 class="display-4 text-center">How Can We Help You?</h1>
    <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
      <div class="">

        <form action="/search/store" method=post class="justify-content-center">
          @csrf
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" class="form-control @error('search') is-invalid @enderror" 
                        name="search" value="{{ old('search') }}" required autocomplete="search" autofocus>
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit">
                <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
        </form>

    </div>
  </div>
</div>

@endsection