@extends('layouts.app')

@include('partials.navbary')

@section('content')
<br>
    @foreach ($kamar_deluxe as $kd)
    <div class="container px-4 " id="custom-cards"><br><br>
        <h2 class="pb-2 border-bottom">{{ $kd->tipe_kamar }} </h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-4">
            <div class="card" style=" width:100%; height:100%;">
                <img class="card-img-top" src="{{ ("/img/").$kd->image }}" alt="" style="width:500px;" alt="Card image">
                <div class="card-body">
                  <p class="card-text">{{ $kd->jumlah_kamar }} Ruangan.</p>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Lihat Fasilitas
                  </button>
                </div>
              </div>
        </div>
    </div>
    @endforeach

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tipe Deluxe</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              @foreach ($deluxe as $d)
                    <li>{{ $d->nama_fasilitas }}</li>
              @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


    @foreach ($kamar_superior as $sp)
    <div class="container px-4 " id="custom-cards"><br><br>
        <h2 class="pb-2 border-bottom">{{ $sp->tipe_kamar }} </h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-4">
            <div class="card" style=" width:100%; height:100%;">
                <img class="card-img-top" src="{{ ("/img/").$sp->image }}" alt="" style="width:500px;" alt="Card image">
                <div class="card-body">
                  <p class="card-text">{{ $sp->jumlah_kamar }} Ruangan</p>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#superior">
                    Lihat Fasilitas
                  </button>
                </div>
              </div>
        </div>
    </div>
    @endforeach


    <div class="modal fade" id="superior" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tipe Superior</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              @foreach ($superior as $s)
                    <li>{{ $s->nama_fasilitas }}</li>
              @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
  <!-- Modal -->

@endsection
