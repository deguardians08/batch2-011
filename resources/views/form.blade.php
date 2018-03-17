@extends("template")
@section("content")
<div class="form-group">
	<label>ID</label>
	<input type="text" name="" id="" class="form-control">
</div>

<div class="form-group">
	<label>Nama</label>
	<input type="text" name="" id="" class="form-control">
</div>

<div class="form-group">
	<label>Alamat</label>
	<input type="text" name="" id="" class="form-control">
</div>

<div class="form-group">
	<label>Umur</label>
	<input type="text" name="" id="" class="form-control">
</div>

<div class="text-right">
	<a href="{{url('/')}}" class="btn btn-success">Simpan Data</a>
</div>

@endsection