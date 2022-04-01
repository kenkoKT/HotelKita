@extends('layouts.app')

@include('partials.navbar')

@section('content')
<head>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        .bd-placeholder-img {
            font-size: 1.5rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
</head>


<main class="px-3" style="background-image: url('/img/hotel.jpg'); height: 548px;">
    <h1 class="header text-white">Empire Kenzo Hotel</h1>
    <p class="lead text-white" >Brand dari Empire Kenzo Building dan Empire Kenzo Company</p>
    <p class="lead">
      <a href="{{ route('login') }}" class="btn btn-lg btn-secondary fw-bold border-black bg-primary text-white">Pesan Sekarang</a>
    </p>
  </main>
@endsection
