@extends('layouts.app')

@include('partials.navbarr')

@section('content')
    <div class="container">
        <form method="get" action="{{ route('resepsionis/dashboard') }}">
            <input type="text" name="keyword" />
            <button type="submit">Search</button>
            <input type="date" name="keyword" />
            <button type="submit">Search</button>
        </form>
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
                            <a href=""><button type="button" class="btn btn-success active">Checkin</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
