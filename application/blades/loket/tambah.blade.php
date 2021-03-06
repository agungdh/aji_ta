@extends('template.template')

@section('title')
Loket
@endsection

@section('nav')
@include('loket.nav')
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Tambah Loket</h3>
			</div>

			<form action="{{base_url()}}loket/aksitambah" method="post" role="form">
				@include('loket.form')

				<div class="box-footer">
					<button type="submit" class="btn btn-success">Simpan</button>
					<a href="{{base_url()}}loket" class="btn btn-info">Batal</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection