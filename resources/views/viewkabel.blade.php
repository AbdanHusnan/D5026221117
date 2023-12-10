@extends('master4')

@section('judul_halaman')
    <h3>Profil Kabel</h3>
    <br>
    <br>
@endsection

@section('konten')
    <div class="row">
        <div class="col-6"></div>
        <div class="col-6">
            @foreach ($kabel as $k)
            <fieldset disabled>
                <form action="/kabel/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $k->kodekabel }}">
                    <div class = "form-group">
                        <label for = "kodekabel" class = "col-sm-2 control-label">kodekabel</label>
                        <div class = "col-sm-10">
                            <input type="text" required="required" name="kodekabel" value="{{ $k->kodekabel }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group">
                        <label for = "merkkabel" class = "col-sm-2 control-label">merkkabel</label>
                        <div class = "col-sm-10">
                            <input type="text" required="required" name="merkkabel" value="{{ $k->merkkabel }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group">
                        <label for = "stockkabel" class = "col-sm-2 control-label">stockkabel</label>
                        <div class = "col-sm-10">
                            <input type="number" required="required" name="stockkabel" value="{{ $k->stockkabel }}" class="form-control">
                        </div>
                    </div>
                    <div class = "form-group row">
                        <input class="col-1" required="required" type = "checkbox" id = "tersedia"  name="is_checked" {{ $k->tersedia == 'y' ? 'checked' : '' }}>
                        <label for = "tersedia" class = "control-label">Ketersedian barang</label>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <div class="text-center" style="width:420px">
                <a href="/kabel" class="btn btn-primary">Ok</a>
            </div>
        </div>
    </div>

@endsection
