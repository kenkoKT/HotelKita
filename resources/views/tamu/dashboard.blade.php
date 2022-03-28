@extends('layouts.app')

@include('partials.navbary')

@section('content')

        {{-- Jumbotron --}}
        <div class="jumbotron" style="
        background-color:cyan;
        height: 578 px;
        width: auto;
        align-">
            <h1 class="display-4">Hotel Kita</h1>
            <p class="lead">Hotel Kita melayani kamar dengan berbagai tipe kamar yang cocok untuk (KITA)</p>

            <form action="{{ route('datareservasi.store') }}" method="post">
                @csrf
                <div class="row g-2">
                    <div class="col-md-4 py-2">
                        <div class="form-floating">
                            <input type="date" name="tgl_checkin" class="form-control" id="tgl_checkin" value="">
                            <label for="floatingInputGrid">Tanggal Check In</label>
                        </div>
                    </div>
                    <div class="col-md-4 py-2">
                        <div class="form-floating">
                            <input type="date" name="tgl_checkout" class="form-control" id="tgl_checkout" value="">
                            <label for="floatingInputGrid">Tanggal Check Out</label>
                        </div>
                    </div>
                    <div class="col-md-4 py-2">
                        <div class="form-floating">
                            <input type="number" name="jumlah_kamar" class="form-control" id="jumlah_kamar" value=""
                                required="required">
                            <label for="floatingInputGrid">Jumlah Kamar</label>
                        </div>
                    </div>
                    <div class="col-md-2 py-3">
                        <div class="form-floating">
                            <button style="width : 680%" class="btn btn-primary" type="button" data-toggle="collapse"
                                data-target="#mycollapse" aria-expanded="false" aria-controls="#mycollapse">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>

                <div class="collapse" id="mycollapse">
                    </br>
                    </br>
                    <h3>Form Pemesanan Kamar</h3>
                    </br>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Pemesan</label>
                        <input name="nama_pemesanan" type="text" class="form-control" id="nama_pemesan"
                            placeholder="Nama Pemesanan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                            placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No Handphone</label>
                        <input name="no_hp" type="number" class="form-control" id="no_hp" placeholder="No Handphone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Tamu</label>
                        <input name="nama_tamu" type="text" class="form-control" id="nama_tamu" placeholder="Nama Tamu">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tipe Kamar</label>
                        <select name="tipe_kamar" id="tipe_kamar" class="form-control" id="exampleFormControlSelect1">
                            <option value="standart_room">Standart Room</option>
                            <option value="deluxe_room">Deluxe Room</option>
                            <option value="superior_room">Superior Room</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Konfirmasi Pemasanan</button>
                    </div>
                </div>
            </form>
            {{-- <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p> --}}
        </div>
        {{-- Akhir Jumbotron --}}
@endsection
