@extends('layouts.app')

@include('partials.navbar')

@section('content')
<h3>Data Kamar</h3>
 
<a href="/admin/kamar/create"><button type="button" class="btn btn-primary active">Tambah Kamar Baru</button></a>
	
	<br/>
	<br/>
 

	<table class="table">
		<thead class="thead-dark">
		  <tr>
			<th scope="col">Tipe Kamar</th>
			<th scope="col">Jumlah Kamar</th>
			<th scope="col">Aksi</th>
		  </tr>
		</thead>
		<tbody>
			@foreach($kamar as $k)
			<tr>
				<td>{{ $k->tipe_kamar }}</td>
				<td>{{ $k->jumlah_kamar }}</td>
				<td>
					<a href="/admin/kamar/edit/{{ $k->id_kamar }}"><button type="button" class="btn btn-success active">Edit</button></a>
					|
					<a href="/admin/kamar/hapus/{{ $k->id_kamar }}"><button type="button" class="btn btn-danger active">Hapus</button></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	  </table>
@endsection
