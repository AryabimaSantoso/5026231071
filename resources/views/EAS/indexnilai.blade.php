@extends('template')

@section('content')
	<h3>Nilai Kuliah</h3>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilai as $n)
		<tr>
			<td>{{ $n->id }}</td>
			<td>{{ $n->nomorinduksiswa }}</td>
			<td>{{ $n->nilaiangka }}</td>
			<td>{{ $n->sks }}</td>
			<td>
                @if ($n->nilaiangka <= 40)
                D
                @elseif ($n->nilaiangka <= 60)
                C
                @elseif ($n->nilaiangka <= 80)
                B
                @else
                A
                @endif
            </td> {{--nilai huruf--}}
            <td>
                {{ $n->nilaiangka * $n->sks }}
            </td> {{--nilai angka x sks--}}
		</tr>
		@endforeach

	</table>

    <a href="/eas/tambah" class="btn btn-primary"> + Tambah Data</a>

{{ $nilai->links() }}

@endsection
