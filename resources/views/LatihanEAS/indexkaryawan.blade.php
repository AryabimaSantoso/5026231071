@extends('template')

@section('content')
	<h3>Data Karyawan</h3>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Kode Karyawan</th>
			<th>NAMA LENGKAP</th>
			<th>Divisi</th>
			<th>departemen</th>
            <th>Hapus Karyawan</th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
			<td>{{ $k->kodepegawai }}</td>
			<td>{{ strtoupper($k->namalengkap) }}</td>
			<td>{{ $k->divisi }}</td>
			<td>{{ strtolower($k->departemen) }}</td>
			<td>
				<form action="/karyawan/hapus/{{ $k->kodepegawai }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>

			</td>
		</tr>
		@endforeach

	</table>

    <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>

{{ $karyawan->links() }}

@endsection
