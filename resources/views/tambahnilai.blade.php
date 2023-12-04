@extends('master3')
@section('judul_halaman')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Nilai</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>
@endsection


@section('konten')
	<form action="/nilaikuliah/store" method="get" class="form-horizontal" role="form">
		{{ csrf_field() }}
			<div class = "form-group">
			   <label for = "NRP" class = "col-sm-2 control-label">NRP</label>
			   <div class = "col-sm-10">
				  <input required = "required" type = "text" class = "form-control" name = "NRP" placeholder = "Masukkan NRP">
			   </div>
			</div>
			<div class = "form-group">
				<label for = "nilaiangka" class = "col-sm-2 control-label">Nilai Angka</label>
				<div class = "col-sm-10">
				   <input required = "required" type = "number" class = "form-control" name = "NilaiAngka" placeholder = "Masukkan Nilai Angka">
				</div>
			</div>
			<div class = "form-group">
				<label for = "sks" class = "col-sm-2 control-label">SKS</label>
				<div class = "col-sm-10">
				   <input required = "required" type = "text" class = "form-control" name = "SKS" placeholder = "Masukkan SKS">
				</div>
			</div>
            <input type="submit" value="simpan data" class="btn btn-warning">

	</form>

@endsection


