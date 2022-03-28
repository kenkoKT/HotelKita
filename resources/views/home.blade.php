@extends('layouts.app')

@include('partials.navbary')

@section('content')
        {{-- Jumbotron --}}
        <div class="jumbotron" style="height : 510px; background-color:cornflowerblue;">
            <h1 class="display-4">Hotel Kita</h1>
            <p class="lead">Hotel Kita melayani kamar dengan berbagai tipe kamar yang cocok untuk (KITA)</p>
            <hr class="my-4">
            <p>Buruan Pesan Sekarang Hotel Kita (Cocok Untuk Kita Manusia)</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Pesan Sekarang</a>
            </p>
        </div>
        {{-- Akhir Jumbotron --}}
@endsection
