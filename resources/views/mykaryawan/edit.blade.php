@extends('template')

@section('content')
    <h3>Edit Karyawan</h3>

    <a href="/eas" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($mykaryawan as $my)
        <form action="/eas/update" method="post" class="form-horizontal">
            {{ csrf_field() }}

            <input type="hidden" name="kodepegawai" value="{{ $my->kodepegawai }}"> <br />

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="namalengkap">
                    Nama Lengkap
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="namalengkap" placeholder="Masukkan Nama Lengkap"
                        name="namalengkap" value="{{ $my->namalengkap }}" required="required">
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="divisi">
                    Divisi
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="divisi" placeholder="Masukkan Divisi"
                        name="divisi" value="{{ $my->divisi }}" required="required">
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="departemen">
                    Departemen
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="departemen" placeholder="Masukkan Departemen Karyawan"
                        name="departemen" value="{{ $my->departemen }}"  required="required">
                </div>
            </div>

            <input type="submit" value="Simpan Data" class="btn btn-success"6>
        </form>
    @endforeach
@endsection
