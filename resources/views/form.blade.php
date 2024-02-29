@extends('layout.main')

@section('content')
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Form Pendaftaran</h4>
						</div>
					</div>
					<form action="/proses" method="POST">
						{{-- {{ csrf_field() }} --}}
						@csrf
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Nama</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nama">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">NIM</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="nim">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Program Studi</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="prodi">
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