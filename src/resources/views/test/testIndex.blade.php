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
        <?php 
            // ini bisa diubah
            $var = 1;
            while($var <= 15){
                $var++;

            /*
            Bisa pake ini kalau sql
            while($tiapbaris = mysqli_fetch_array($dataterambil))
            {
            */
        ?>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <!--
                        <h5 class="card-title "> {Judul} </h5>
                    -->
                    <h5 class="card-title "> Judul </h5>
                    <p class="card-text">
                        <table>
                            <tr>
                                <td> Jumlah Kata
                                <td> : 
                                <td>  123
                                <!-- 
                                <td> Jumlah Kata
                                <td> : 
                                <td>  {ini variabel penampung jumlah kata}
                                -->
                            <tr>
                                <td> Tingkat Kemiripan
                                <td> :
                                <td>  46%
                                <!-- 
                                <td> Tingkat Kemiripan
                                <td> : 
                                <td>  {ini variabel penampung nilai cos}
                                -->
                            <tr>
                                <td> Kalimat Pertama
                                <td> :
                                <td>  ea
                                <!-- 
                                <td> Kalimat Pertama
                                <td> : 
                                <td>  {ini variabel penampung kalimat pertama}
                                -->
                        </table>
                    </p>
                    <a href="#" class="btn btn-primary">Link</a>
                </div>
            </div>
        </div>
        <?php } ?>

        <!-- INI KOMENTAR
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title "> Judul </h5>
                    <p class="card-text">
                        <table>
                            <tr>
                                <td> Jumlah Kata
                                <td> : 
                                <td>  123
                            <tr>
                                <td> Tingkat Kemiripan
                                <td> :
                                <td>  46%
                            <tr>
                                <td> Kalimat Pertama
                                <td> :
                                <td>  ea
                        </table>
                    </p>
                    <a href="#" class="btn btn-primary">Link</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title "> Judul </h5>
                    <p class="card-text">
                        <table>
                            <tr>
                                <td> Jumlah Kata
                                <td> : 
                                <td>  123
                            <tr>
                                <td> Tingkat Kemiripan
                                <td> :
                                <td>  46%
                            <tr>
                                <td> Kalimat Pertama
                                <td> :
                                <td>  ea
                        </table>
                    </p>
                    <a href="#" class="btn btn-primary">Link</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title "> Judul </h5>
                    <p class="card-text">
                        <table>
                            <tr>
                                <td> Jumlah Kata
                                <td> : 
                                <td>  123
                            <tr>
                                <td> Tingkat Kemiripan
                                <td> :
                                <td>  46%
                            <tr>
                                <td> Kalimat Pertama
                                <td> :
                                <td>  ea
                        </table>
                    </p>
                    <a href="#" class="btn btn-primary">Link</a>
                </div>
            </div>
        </div>
        -->
    </div>
</div>

@endsection