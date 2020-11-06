<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Search Engine </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo e(URL::asset('img/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(URL::asset('img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <!-- Bootstrap CSS File <?php echo e(asset('css/app.css')); ?> -->
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

  <!-- Script -->
  <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

  <!-- Libraries CSS Files -->


  <!-- Main Stylesheet File -->
  <link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet">
  <?php echo $__env->yieldContent('style'); ?>
</head>

  <!--==========================
  Header


<header id="header">
    <div class="container-fluid">
    ### Ini buat logo ###
    
      <div class="logo float-left">
        <a href="/landing" class="scrollto"><img src="<?php echo e(URL::asset('img/apple-touch-icon.png')); ?>" width="30" height="30" alt=""></a>
         <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> class="active" 
      </div>
    
    #########
    
        <nav class="navbar navbar-dark bg-dark justify-content-between">
          <a class="navbar-brand">Search Engine</a>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </nav>
    
    </div>
</header>


============================-->
<!-- #header -->


<body>
  <?php echo $__env->yieldContent('content'); ?>
</body>

<footer>
<div class="container padding content">
<div class="row text-center">
	<div class="col-md-4">
    <hr class="light">
		<!--  <img src="<?php echo e(URL::asset('#')); ?>" height=230px> -->
    <h5> Aljabar Linier dan Geometri </h5>
    <hr class="light">
    <p> About Us </p>
	</div>
	<div class="col-md-4">
		<hr class="light">
		<h5> Services </h5>
		<hr class="light">
		<a href="#"> <p> Search </p> </a>
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

<?php echo $__env->yieldContent('script'); ?>

</html><?php /**PATH /home/adinatha/Documents/Programming/Website/Algeo02-19048/src/search_engine/resources/views/template/main.blade.php ENDPATH**/ ?>