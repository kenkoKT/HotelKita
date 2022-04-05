@extends('layouts.app')

@section('content')
    <html>

    <head>
        <title>Hotel Kita</title>
    </head>

    <body>

        <h3>Data Kamar</h3>

        <a href="{{ route('admin/kamar/dashboard') }}"><button type="button"
                class="btn btn-primary active">Kembali</button></a>


        <br />
        <br />

        <form action="/admin/kamar/store" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Tipe Kamar</label>
                <select class="form-select" id="inputGroupSelect02" name="tipe_kamar" required>
                    <option selected disabled>pilih tipe kamar</option>
                    <option>Deluxe</option>
                    <option>Superior</option>

                  </select>
            </div>
            <br />
            <div class="form-group">
                <label>Jumlah Kamar</label>
                <input type="number" class="form-control" name="jumlah_kamar" required="required">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image" required="required">
            </div>
            <br />
            <button type="submit" class="btn btn-primary" value="Simpan Data">Submit</button>
        </form>

    </body>

    </html>
@endsection
