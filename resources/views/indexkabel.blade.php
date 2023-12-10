@extends('master4')
@section('title','Kabel')

@section('judul_halaman')

	<h3>Kabel</h3>
    <a href="/kabel/tambahkabel"> + Tambah Data Kabel</a>

	<br/>
	<br/>
@endsection

@section('konten')
<p>Cari Data Kabel :</p>
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($kabel as $k)
		<tr>
			<td>{{ $k->kodekabel }}</td>
			<td>{{ $k->merkkabel}}</td>
			<td>{{ $k->stockkabel}}</td>
			<td>{{ $k->tersedia }}</td>
            <td>
				<a href="/kabel/editkabel/{{ $k->kodekabel }}" class="btn btn-warning">Edit</a>
				|
				<a href="/kabel/hapus/{{ $k->kodekabel }}" class="btn btn-danger">Hapus</a>
                |
                <a href="/kabel/viewkabel/{{ $k->kodekabel}}" class="btn btn-primary">View</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection

