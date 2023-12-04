@extends('master2')
@section('judul_halaman')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>
@endsection


@section('konten')
	<form action="/pegawai/store" method="post" class="form-horizontal" role="form">
		{{ csrf_field() }}
			<div class = "form-group">
			   <label for = "nama" class = "col-sm-2 control-label">Nama</label>
			   <div class = "col-sm-10">
				  <input required="required" type = "text" class = "form-control" name = "nama" placeholder = "Masukkan Nama">
			   </div>
			</div>
			<div class = "form-group">
			   <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
			   <div class = "col-sm-10">
				  <input required = "required" type = "text" class = "form-control" name = "jabatan" placeholder = "Masukkan Jabatan">
			   </div>
			</div>
			<div class = "form-group">
				<label for = "umur" class = "col-sm-2 control-label">Umur</label>
				<div class = "col-sm-10">
				   <input required = "required" type = "number" class = "form-control" name = "umur" placeholder = "Masukkan Umur">
				</div>
			</div>
			<div class = "form-group">
				<label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
				<div class = "col-sm-10">
				   <input required = "required" type = "text" class = "form-control" name = "alamat" placeholder = "Masukkan Alamat">
				</div>
			</div>
            <input type="submit" value="simpan data" class="btn btn-warning">

	</form>

@endsection


