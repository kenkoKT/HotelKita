@extends('layouts.app')

@include('partials.navbar')

<head>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
</head>

<img src="/img/hotel5.jpg" alt="" style="width:100%; height:607px;">
<main class="px-3" >
        <div class="container">
            <div class="carousel-caption text-start">
                <h1>Kenzo Empire  Hotel</h1>
                <p>Hotelnya Para Humanoid (Pancen Oye)</p>
                <p><a class="btn btn-lg btn-primary" href="{{ route('login') }}">Pesan Sekarang</a></p>
            </div>
        </div>
  </main>
