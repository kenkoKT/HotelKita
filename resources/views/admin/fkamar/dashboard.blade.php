@extends('layouts.app')

@include('partials.navbark')

@section('content')
<h3>Data Fasilitas Kamar</h3>

<a href="/admin/fkamar/create"><button type="button" class="btn btn-primary active">Tambah Fasilitas Kamar</button></a>

	<br/>
	<br/>


	<table class="table">
		<thead class="thead-dark">
		  <tr>
			<th scope="col">Tipe Kamar</th>
			<th scope="col">Nama Fasilitas</th>
            <th scope="col">Image</th>
			<th scope="col">Aksi</th>
		  </tr>
		</thead>
		<tbody>
			@foreach($fkamar as $f)
			<tr>
				<td>{{ $f->tipe_kamar }}</td>
				<td>{{ $f->nama_fasilitas }}</td>
                <td><img src="{{ ("/img/").$f->image }}" alt="" style="width: 100px; height: 100px"/></td>
				<td>
					<a href="/admin/fkamar/edit/{{ $f->id_fkamar }}"><button type="button" class="btn btn-success active">Edit</button></a>
					|
					<a href="/admin/fkamar/hapus/{{ $f->id_fkamar }}"><button type="button" class="btn btn-danger active">Hapus</button></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	  </table>
@endsection
