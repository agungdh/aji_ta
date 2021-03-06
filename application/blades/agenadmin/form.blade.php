<div class="box-body">

	@php
	if (ci()->session->flashdata('errors') && ci()->session->flashdata('errors')->has('nama')) {
		$class = 'form-group has-feedback has-error';
		$message = ci()->session->flashdata('errors')->first('nama');
	} else {
		$class = 'form-group has-feedback';
		$message = '';
	}

	if (ci()->session->flashdata('old') && ci()->session->flashdata('old')['nama']) {
		$value = ci()->session->flashdata('old')['nama'];
	} elseif (isset($agen) && $agen['nama']) {
		$value = $agen['nama'];
	} else {
		$value = '';
	}
	@endphp
	<div class="{{$class}}">
		<label for="nama" data-toggle="tooltip" title="{{$message}}">Nama</label>
		<div data-toggle="tooltip" title="{{$message}}">
			<input type="text" name="nama" class="form-control" placeholder="Isi Nama" id="nama" value="{{$value}}">
		</div>
	</div>

	@php
	if (ci()->session->flashdata('errors') && ci()->session->flashdata('errors')->has('no_hp')) {
		$class = 'form-group has-feedback has-error';
		$message = ci()->session->flashdata('errors')->first('no_hp');
	} else {
		$class = 'form-group has-feedback';
		$message = '';
	}

	if (ci()->session->flashdata('old') && ci()->session->flashdata('old')['no_hp']) {
		$value = ci()->session->flashdata('old')['no_hp'];
	} elseif (isset($agen) && $agen['no_hp']) {
		$value = $agen['no_hp'];
	} else {
		$value = '';
	}
	@endphp
	<div class="{{$class}}">
		<label for="no_hp" data-toggle="tooltip" title="{{$message}}">No HP</label>
		<div data-toggle="tooltip" title="{{$message}}">
			<input type="text" name="no_hp" class="form-control" placeholder="Isi No HP" id="no_hp" value="{{$value}}">
		</div>
	</div>
	
</div>