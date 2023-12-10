@extends('master4')
@section('judul_halaman')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Kabel</h3>

	<a href="/kabel"> Kembali</a>

	<br/>
	<br/>
@endsection


@section('konten')
	<form action="/kabel/store" method="get" class="form-horizontal" role="form">
		{{ csrf_field() }}
			<div class = "form-group">
			   <label for = "merkkabel" class = "col-sm-2 control-label">merk Kabel</label>
			   <div class = "col-sm-10">
				  <input required = "required" type = "text" class = "form-control" name = "merkkabel" placeholder = "Masukkan merkkabel">
			   </div>
			</div>
			<div class = "form-group">
				<label for = "stockkabel" class = "col-sm-2 control-label">Stock Kabel</label>
				<div class = "col-sm-10">
				   <input required = "required" type = "number" class = "form-control" name = "stockkabel" placeholder = "Masukkan Stock">
				</div>
			</div>
			<div class = "form-group d-flex flex-row">
                <input class="col-1"  name="is_checked" type = "checkbox" id = "tersedia" value="Ketersediaan barang">
                <label for = "tersedia" class = "control-label">Ketersedian barang</label>
            </div>
            <input type="submit" value="simpan data" class="btn btn-warning">

	</form>

@endsection


