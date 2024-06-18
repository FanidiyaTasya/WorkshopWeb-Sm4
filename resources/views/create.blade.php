@extends('layout.main')

@section('content')
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Tambah Data Mahasiswa</h4>
						</div>
					</div>
					<form action="/add" method="POST">
						{{-- {{ csrf_field() }} --}}
						@csrf
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label" for="nim">NIM</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nim" required autofocus>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label" for="nama">Nama</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nama" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label" for="tgl_lahir">Tanggal Lahir</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="date" name="tgl_lahir" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label" for="alamat">Alamat</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="alamat" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label" for="th_angkatan">Tahun Angkatan</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="th_angkatan" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label" for="status">Status</label>
							<div class="col-sm-12 col-md-10">
								<select class="form-control" name="status" required>
									<option value="Select" selected disabled>Select</option>
									<option value="Aktif">Aktif</option>
									<option value="Tidak Aktif">Tidak Aktif</option>
								</select>
							</div>
						</div>
						
						<input class="btn btn-primary" type="submit" value="Simpan">
					</form>
				</div>
				<!-- Default Basic Forms End -->
			</div>
		</div>
	</div>
@endsection