@extends('master2')

@section('judul_halaman')
<h3>Edit Pegawai</h3>
<br>
<br>

@endsection

@section('konten')
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" role="form">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "Nama" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-10">
               <input required = "required" type = "text" class = "form-control" name = "nama" value = "{{ $p->pegawai_nama }}">
            </div>
         </div>
         <div class = "form-group">
            <label for = "Jabatan" class = "col-sm-2 control-label">Jabatan</label>
            <div class = "col-sm-10">
               <input required = "required" type = "text" class = "form-control" name = "jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
         </div>
         <div class = "form-group">
            <label for = "Umur" class = "col-sm-2 control-label">Umur</label>
            <div class = "col-sm-10">
               <input required = "required"  type = "number" class = "form-control" name = "umur" value="{{ $p->pegawai_umur }}">
            </div>
         </div>
         <div class = "form-group">
            <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
            <div class = "col-sm-10">
               <input required = "required"  type = "text" class = "form-control" name = "alamat" value="{{ $p->pegawai_alamat }}">
            </div>
         </div>
         <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection


