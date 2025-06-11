@extends('template')

@section('content')
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

    <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Pegawai ..">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

	<br/>

	<table class="table table-striped">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <form action="{{ url('/pegawai/edit/' . $p->pegawai_id) }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
				|
                <form action="{{ url('/pegawai/hapus/' . $p->pegawai_id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>


			</td>
		</tr>
		@endforeach

	</table>
{{ $pegawai->links() }}

@endsection
