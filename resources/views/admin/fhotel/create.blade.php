@extends('layouts.app')

@section('content')
<html>
<head>
	<title>Hotel Kita</title>
</head>
<body>
 
	<h3>Data Fasilitas Hotel</h3>
 
	<a href="{{ route('admin/fhotel/dashboard') }}"><button type="button" class="btn btn-primary active">Kembali</button></a>

	
	<br/>
	<br/>

	<form action="/admin/fhotel/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
		  <label>Nama Fasilitas</label>
		  <input type="text" class="form-control" name="nama_fasilitas" required="required">
		</div>
		<br/>
		<div class="form-group">
		  <label>Keterangan</label>
		  <input type="text" class="form-control" name="keterangan" required="required">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image" required="required">
          </div>
		<br/>
		<button type="submit" class="btn btn-primary" value="Simpan Data">Submit</button>
	  </form>
 
</body>
</html>
@endsection

