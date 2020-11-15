<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Search Engine </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ URL::asset('img/favicon.png') }}" rel="icon">
  <link href="{{ URL::asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <!-- Bootstrap CSS File {{ asset('css/app.css') }} -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Script -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Libraries CSS Files -->


  <!-- Main Stylesheet File -->
  <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
  @yield('style')
</head>

<header id="header">
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-dark justify-content-between">
          <a href="/landing" class="navbar-brand pt-3">Search Engine</a>
          <form action="/search/store" class="form-inline">
            @csrf
              <input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search" 
              value="{{ old('search') }}" required autocomplete="search" autofocus>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </nav>
    </div>
</header>

<body>
  @yield('content')
</body>

<footer>
<div class="container padding content">
<div class="row text-center">
	<div class="col-md-4">
    <hr class="light">
		<!--  <img src="{{ URL::asset('#') }}" height=230px> -->
    <h5> Aljabar Linier dan Geometri </h5>
    <hr class="light">
    <a href="/about"> <p> About Us </p> </a>
	</div>
	<div class="col-md-4">
		<hr class="light">
		<h5> Services </h5>
		<hr class="light">
		<a href="/search"> <p> Search </p> </a>
		<a href="/post/create"> <p> Upload </p> </a>
        <a href="/post/"> <p> Post </p> </a>
	</div>
	<div class="col-md-4">
		<hr class="light">
		<h5> Creator </h5>
		<hr class="light">
		<p> Ariya Adinatha </p>
    <p> Hokki Suwanda </p>
    <p> Wisnu Aditya S. </p>
	</div>
</div>
</div>
</footer>

@yield('script')

</html>