@extends('layout.main')

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Data Mahasiswa</h4>
                        </div>
                        <br>
                        <div class="btn pull-right">
                            <a href="/form" class="btn btn-primary" type="submit">Create</a>
                        </div>
                        <div>
                            @if (@session('success'))
								<div class="alert alert-success" style="max-width: 500px;">
									<strong>Success!</strong> {{ session('success') }}
								</div>
							@endif
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col" style="width: 250px;">Alamat</th>
                                    <th scope="col">Tahun Angkatan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswa as $index => $mhs)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $mhs->nim }}</td>
                                        <td>{{ $mhs->nama }}</td>
                                        <td>{{ date_create_from_format('Y-m-d', $mhs->tgl_lahir)->format('d M Y') }}</td>
                                        <td>{{ $mhs->alamat }}</td>
                                        <td>{{ $mhs->th_angkatan }}</td>
                                        <td>{{ $mhs->status }}</td>
                                        <td>
                                            <a href="/mahasiswa/edit/{{ $mhs->id }}">
                                                <i class="icon-copy fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            |
                                            <a href="/mahasiswa/delete/{{ $mhs->id }}"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="icon-copy fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection