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
          <select class="form-select" id="inputGroupSelect02" name="tipe_kamar" required>
            <option>{{ $f->tipe_kamar }}</option>
            <option>Deluxe</option>
            <option>Superior</option>
          </select>
		</div>
		<br/>
		<div class="form-group">
		  <label>Nama Fasilitas</label>
		  <input type="text" class="form-control" name="nama_fasilitas" required="required" value="{{ $f->nama_fasilitas }}">
		</div>
		<br/>
		<button type="submit" class="btn btn-primary" value="Simpan Data">Submit</button>
	  </form>
	  @endforeach


</body>
</html>
@endsection
