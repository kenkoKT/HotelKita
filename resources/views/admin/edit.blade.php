<!DOCTYPE html>
<html>
<head>
	<title>Hotel Kita</title>
</head>
<body>
 
	<h3>Edit Kamar</h3>
 
	<a href="/dashboard"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($kamar as $k)
	<form action="/admin/edit/{{ $k->id_kamar }}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $k->id_kamar }}"> <br/>
		Tipe Kamar <input type="text" required="required" name="tipe_kamar" value="{{ $k->tipe_kamar }}"> <br/>
		Jumlah Kamar <input type="number" required="required" name="jumlah_kamar" value="{{ $k->jumlah_kamar }}"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>