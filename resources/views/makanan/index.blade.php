@extends('template')

@section('content')

	<h3>Data Makanan</h3>

	<a href="/makanan/tambah" class="btn btn-primary mb-3"> + Tambah Makanan Baru</a>

    <p>Cari Data Makanan :</p>
	<form action="/makanan/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Makanan ..">
		<input type="submit" value="CARI" class="btn btn-info mt-3">
	</form>

	<br/>


	<table class="table table-striped table-hover">
		<tr>
			<th>Merk Makanan</th>
			<th>Harga Makanan</th>
			<th>Tersedia(Y/N)</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($makanan as $m)
		<tr>
			<td>{{ $m->merkmakanan }}</td>
			<td>{{ $m->hargamakanan }}</td>
			<td>{{ $m->tersedia }}</td>
			<td>{{ $m->berat }}</td>
            <td>
                <a href="/makanan/edit/{{ $m->id }}" class="btn btn-success">Edit</a>
				|
				<a href="/makanan/hapus/{{ $m->id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

	{{ $makanan->links() }}

@endsection
