@extends('master5')

@section('title', 'kategorri')

@section('konten')
<form action="/kategorri/pilih" method="post">
    @csrf
    <div class="form-group">
        <label for="kategorri">Pilih kategorri</label>
        <select name="kategorri" id="kategorri" class="form-control">
            @foreach($kategorri as $k)
                <option value="{{ $k->ID }}">{{ $k->Nama }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">KIRIM</button>
</form>
@endsection
