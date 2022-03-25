@extends('layouts.app')

@include('partials.navbary')

@section('content')
    <div class="container">
        {{-- Jumbotron --}}
        <div class="jumbotron" style="height : 510px">
            <h1 class="display-4">Hotel Kita</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Pesan Sekarang</a>
            </p>
        </div>
    </div>
        {{-- Akhir Jumbotron --}}
@endsection
