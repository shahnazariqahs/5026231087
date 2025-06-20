@extends('template')

@section('content')

	<h3>Data Karyawan</h3>

	<br/>


	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Action</th>
		</tr>
		@foreach($mykaryawan as $my)
		<tr>
			<td>{{ $my->kodepegawai }}</td>
			<td>{{ Str::title($my->namalengkap) }}</td>
			<td>{{ $my->divisi }}</td>
			<td>{{ $my->departemen }}</td>
            <td>
                <a href="/eas/edit/{{ $my->kodepegawai }}" class="btn btn-success">Edit</a>
				|
				<a href="/eas/view/{{ $my->kodepegawai }}" class="btn btn-danger">View</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
