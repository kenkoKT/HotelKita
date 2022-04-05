@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Hotel Kita</title>
    </head>

    <body>

        <h3>Edit Kamar</h3>

        <a href="{{ route('admin/kamar/dashboard') }}"><button type="button"
                class="btn btn-primary active">Kembali</button></a>

        <br />
        <br />

        @foreach ($kamar as $k)
            <form action="/admin/kamar/update/{id}{{ $k->id_kamar }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $k->id_kamar }}">
                <div class="form-group">
                    <label>Tipe Kamar</label>
                    <input type="text" class="form-control" name="tipe_kamar" required="required"
                        value="{{ $k->tipe_kamar }}">
                </div>
                <br />
                <div class="form-group">
                    <label>Jumlah Kamar</label>
                    <input type="number" class="form-control" name="jumlah_kamar" required="required"
                        value="{{ $k->jumlah_kamar }}">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" required="required" value="{{ $k->image }}">
                </div>
                <br />
                <button type="submit" class="btn btn-primary" value="Simpan Data">Submit</button>
            </form>
        @endforeach


    </body>

    </html>
@endsection
