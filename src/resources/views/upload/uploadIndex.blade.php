@extends("template.main")

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

<div class="jumbotron jumbotron-fluid vertical-center">
  <div class="container">
    <!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
    <div class="">
        <p class="display-4 text-center">Ini untuk upload</p>
    </div>
  </div>
</div>

@endsection