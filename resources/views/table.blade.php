@extends("template")
@section("content")

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Kolom Header</th>
			<th>Kolom Header</th>
			<th>Kolom Header</th>
			<th>Kolom Header</th>
			<th>Kolom Header</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Daftar</th>
			<th>Daftar</th>
			<th>Daftar</th>
			<th>Daftar</th>
			<th>Daftar</th>
		</tr>
	</tbody>
	</table>
<div class="text-right">
	<a href="{{ url('/form') }}" class="btn btn-primary">Tambah Data</a>
</div>
@endsection