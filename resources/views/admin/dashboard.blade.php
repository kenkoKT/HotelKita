@extends('layouts.app')

@include('partials.navbar')

@section('content')
<h3>Data Kamar</h3>
 
	<a href="/admin/create"> + Tambah Kamar Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Tipe Kamar</th>
			<th>Jumlah Kamar</th>
		</tr>
		@foreach($kamar as $k)
		<tr>
			<td>{{ $k->tipe_kamar }}</td>
			<td>{{ $k->jumlah_kamar }}</td>
			<td>
				<a href="/admin/edit/{{ $k->tipe_kamar }}">Edit</a>
				|
				<a href="/admin/hapus/{{ $k->jumlah_kamar }}">Hapus</a>
			</td>
		</tr>
		@endforeach
    </table>
@endsection
