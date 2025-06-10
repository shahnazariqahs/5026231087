@extends('template')

@section('content')
    <h3>Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="nama">Nama</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="nama" name="nama" value="{{ $p->pegawai_nama }}"
                        placeholder="Masukkan Nama Pegawai" required>
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="jabatan">Jabatan</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="jabatan" name="jabatan"
                        value="{{ $p->pegawai_jabatan }}" placeholder="Masukkan Jabatan" required>
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="umur">Umur</label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" id="umur" name="umur" value="{{ $p->pegawai_umur }}"
                        placeholder="Masukkan Umur" required>
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="alamat">Alamat</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-6">
                    <input type="submit" class="btn btn-primary" value="Simpan Data">
                </div>
            </div>

        </form>
    @endforeach
@endsection
