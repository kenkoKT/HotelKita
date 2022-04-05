@extends('layouts.app')

@include('partials.navbary')

@section('content')
<br>
<br>

    <div class="container px-4 " id="custom-cards">
        <h2 class="pb-2 border-bottom">Fasilitas Hotel</h2>
    @foreach ($fhotel as $f)
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-4">
            <div class="col">
                <div class="card" style=" width:100%; height:20%;">
                    <img class="card-img-top" src="{{ ("/img/").$f->image }}" alt="Card image">
                    <div class="card-img-overlay">
                      <h2 class="card-title text-white">{{ $f->nama_fasilitas }}</h2>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection
