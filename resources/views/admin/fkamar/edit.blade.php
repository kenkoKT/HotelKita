@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Hotel Kita</title>
</head>
<body>

	<h3>Edit Fasilitas Kamar</h3>

	<a href="{{ route('admin/fkamar/dashboard') }}"><button type="button" class="btn btn-primary active">Kembali</button></a>

	<br/>
	<br/>

	@foreach($fkamar as $f)
	<form action="/admin/fkamar/update/{id}{{ $f->id_fkamar }}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $f->id_fkamar }}">
		<div class="form-group">
		  <label>Tipe Kamar</label>
		  <input type="text" class="form-control" name="tipe_kamar" required="required" value="{{ $f->tipe_kamar }}">
		</div>
		<br/>
		<div class="form-group">
		  <label>Nama Fasilitas</label>
		  <input type="text" class="form-control" name="nama_fasilitas" required="required" value="{{ $f->nama_fasilitas }}">
		</div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image" required="required" value="{{ $f->image }}">
        </div>
		<br/>
		<button type="submit" class="btn btn-primary" value="Simpan Data">Submit</button>
	  </form>
	  @endforeach


</body>
</html>
@endsection
