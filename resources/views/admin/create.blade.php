<html>
<head>
	<title>Hotel Kita</title>
</head>
<body>
 
	<h3>Data Kamar</h3>
 
	<a href="/dashboard"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/admin/store" method="post">
		{{ csrf_field() }}
		Tipe Kamar <input type="text" name="tipe_kamar" required="required"> <br/>
		Jumlah Kamar <input type="number" name="jumlah_kamar" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>
