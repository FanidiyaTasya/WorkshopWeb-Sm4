@extends('layout.main')

@section('content')
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Edit Data Mahasiswa</h4>
						</div>
					</div>
					@foreach ($mahasiswa as $mhs)
					<form action="/mahasiswa/update" method="POST">
						@csrf
						@method('PUT')
						<input type="hidden" name="id" value="{{ $mhs->id }}">

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label" for="nim">NIM</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nim" value="{{ $mhs->nim }}" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label" for="nama">Nama</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nama" value="{{ $mhs->nama }}" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label" for="tgl_lahir">Tanggal Lahir</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="date" name="tgl_lahir" value="{{ $mhs->tgl_lahir }}" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label" for="alamat">Alamat</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="alamat" value="{{ $mhs->alamat }}" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label" for="th_angkatan">Tahun Angkatan</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="th_angkatan" value="{{ $mhs->th_angkatan }}" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label" for="status">Status</label>
							<div class="col-sm-12 col-md-10">
								<select class="form-control" name="status" required>
									<option value="Select" selected disabled>Select</option>
									<option value="Aktif" {{ $mhs->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
									<option value="Tidak Aktif" {{ $mhs->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
								</select>
							</div>
						</div>
						
						<input class="btn btn-primary" type="submit" value="Simpan">	
					</form>
					@endforeach
				</div>
				<!-- Default Basic Forms End -->
			</div>
		</div>
	</div>
@endsection