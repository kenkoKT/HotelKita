@extends('layouts.app')

@include('partials.navbark')

@section('content')
<h3>Data Fasilitas Hotel</h3>
 
<a href="/admin/fhotel/create"><button type="button" class="btn btn-primary active">Tambah Fasilitas Hotel</button></a>
	
	<br/>
	<br/>
 

	<table class="table">
		<thead class="thead-dark">
		  <tr>
			<th scope="col">Nama Fasilitas</th>
			<th scope="col">Keterangan</th>
            <th scope="col">Image</th>
            <th scope="col">Aksi</th>
		  </tr>
		</thead>
		<tbody>
			@foreach($fhotel as $h)
			<tr>
				<td>{{ $h->nama_fasilitas }}</td>
                <td>{{ $h->keterangan }}</td>
                <td>{{ $h->image }}</td>
				<td>
					<a href="/admin/fhotel/edit/{{ $h->id_fhotel }}"><button type="button" class="btn btn-success active">Edit</button></a>
					|
					<a href="/admin/fhotel/hapus/{{ $h->id_fhotel }}"><button type="button" class="btn btn-danger active">Hapus</button></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	  </table>
@endsection
