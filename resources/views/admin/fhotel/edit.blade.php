@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Hotel Kita</title>
    </head>

    <body>

        <h3>Edit Fasilitas Hotel</h3>

        <a href="{{ route('admin/fhotel/dashboard') }}"><button type="button"
                class="btn btn-primary active">Kembali</button></a>

        <br />
        <br />

        @foreach ($fhotel as $h)
            <form action="/admin/fhotel/update/{id}{{ $h->id_fhotel }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $h->id_fhotel }}">
                <div class="form-group">
                    <label>Nama Fasilitas</label>
                    <input type="text" class="form-control" name="nama_fasilitas" required="required"
                        value="{{ $h->nama_fasilitas }}">
                </div>
                <br />
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" required="required"
                        value="{{ $h->keterangan }}">
                </div>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                <div class="row">
                    current image : <br>
                    <img src="{{ asset("img/$h->image") }}" class="img-thumbnail" />
                    <small>{{ $h->image }}</small>
                </div>
                <br />
                <button type="submit" class="btn btn-primary" value="Simpan Data">Submit</button>
            </form>
        @endforeach


    </body>

    </html>
@endsection
