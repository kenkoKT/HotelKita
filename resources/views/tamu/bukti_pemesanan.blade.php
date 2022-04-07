@extends('layouts.app')

@include('partials.navbary')

@section('content')
<br>
<br>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama Tamu</th>
                    <th scope="col">Tanggal Check In</th>
                    <th scope="col">Tanggal Check Out</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservasi as $r)
                    <tr>
                        <td>{{ $r->nama_tamu }}</td>
                        <td>{{ $r->tgl_checkin }}</td>
                        <td>{{ $r->tgl_checkout }}</td>
                        <td>
                            <a href="/tamu/cetak_bukti_pemesanan/{{ $r->id_reservasi }}"><button type="button" class="btn btn-success active">Cetak</button></a>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
