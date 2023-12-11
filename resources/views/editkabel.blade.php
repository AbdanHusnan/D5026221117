@extends('master4')

@section('judul_halaman')
<h3>Edit Data Kabel</h3>
<br>
<br>

@endsection

@section('konten')
	@foreach($kabel as $k)
	<form action="/kabel/update" method="get" role="form">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $k->kodekabel }}">
        <div class = "form-group">
            <label for = "Nama" class = "col-sm-2 control-label">Merk</label>
            <div class = "col-sm-10">
               <input required = "required" type = "text" class = "form-control" name = "merk" value = "{{ $k->merkkabel }}">
            </div>
         </div>
         <div class = "form-group">
            <label for = "Jabatan" class = "col-sm-2 control-label">Stock</label>
            <div class = "col-sm-10">
               <input required = "required" type = "text" class = "form-control" name = "stock" value="{{ $k->stockkabel }}">
            </div>
         </div>
         <div class = "form-group">
            <label for = "Umur" class = "col-sm-2 control-label">Ketersediaan</label>
            <div class = "col-sm-10">
               <input required = "required"  type = "number" class = "form-control" name = "is_checked" value="{{ $k->tersedia == 'y' ? 'checked' : '' }}">
            </div>
         </div>
         <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection


