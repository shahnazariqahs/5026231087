@extends('template')

@section('content')
    <h3>Edit Makanan</h3>

    <a href="/makanan" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    @foreach ($makanan as $m)
        <form action="/makanan/update" method="post" class="form-horizontal">
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{ $m->id }}"> <br />

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="merk">
                    Merk Makanan
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="merk" placeholder="Masukkan Merk Makanan"
                        name="merk" value="{{ $m->merkmakanan }}" required="required">
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="merk">
                    Harga
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" id="harga" placeholder="Masukkan Harga Makanan"
                        name="harga" value="{{ $m->hargamakanan }}" required="required">
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2">Tersedia</label>
                <div class="col-sm-6">
                    <div class="radio">
                        <label>
                            <input type="radio" name="tersedia" value="1" {{ $m->tersedia == 1 ? 'checked' : '' }}>
                            Ya
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="tersedia" value="0" {{ $m->tersedia == 0 ? 'checked' : '' }}>
                            Tidak
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="merk">
                    Berat (dalam gram)
                </label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" id="berat" placeholder="Masukkan Berat Makanan"
                        name="berat" value="{{ $m->berat }}" step="0.01" value="0.00" required="required">
                </div>
            </div>

            <input type="submit" value="Simpan Data" class="btn btn-success"6>
        </form>
    @endforeach
@endsection
