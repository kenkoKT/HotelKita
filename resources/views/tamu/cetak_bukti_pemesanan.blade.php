@extends('layouts.app')


@section('content')
<br>
<br>
    <div class="container">
        <div class="card" style="width: 500px; margin-left:300px; background-color:bisque;">
            <div class="card-body">
                <h3>Empire Kenzo Hotel</h3>
                <hr class="featurette-divider">
                <center><h5 class="card-title">Bukti Pemesanan</h5></center>

                <hr class="featurette-divider">
                @foreach ($reservasi as $r)
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Tamu</label>
                        <input type="text" class="form-control" name="nama_tamu" required="required"
                        value="{{ $r->nama_tamu }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal Checkin</label>
                        <input type="date" class="form-control" name="nama_tamu" required="required"
                        value="{{ $r->tgl_checkin }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal Checkout</label>
                        <input type="date" class="form-control" name="nama_tamu" required="required"
                        value="{{ $r->tgl_checkout}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tipe Kamar</label>
                        <input type="text" class="form-control" name="nama_tamu" required="required"
                        value="{{ $r->tipe_kamar }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jumlah kamar</label>
                        <input type="text" class="form-control" name="nama_tamu" required="required"
                        value="{{ $r->jumlah_kamar }}">
                    </div>
                </form>
                @endforeach
            </div>
        </div>
        {{-- @foreach ($reservasi as $r)
            <tr>
                <td>{{ $r->nama_tamu }}</td>
                <td>{{ $r->tgl_checkin }}</td>
                <td>{{ $r->tgl_checkout }}</td>
                <td>
                    <a href=""><button type="button" class="btn btn-success active">Cetak</button></a>

                    <a href="/tamu/bukti_pemesanan/hapus/{{ $r->id_reservasi }}"><button type="button"
                            class="btn btn-danger active">Hapus Pesanan</button></a>
                </td>
            </tr>
        @endforeach --}}
    </div>
    <script type="text/javascript">
        window.print();
    </script>
@endsection
