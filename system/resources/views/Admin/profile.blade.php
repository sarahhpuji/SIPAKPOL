@extends('Layout.base')
@section('title', 'DASHBOARD')
@section('content')

	{{-- <form action="{{ url('update-pegawai', $admin->id) }}" method="post" enctype="multipart/form-data"> --}}
	<div class="card mt-4">
		<div class="card-header"><b>
				PROFIL
			</b></div>
		<div class="card-body">
			<div class="row">
				@csrf
				@method('PUT')
				<div class="col-lg-3 col-md-3 col-sm-12">
					<div class="">
						<div class="card">
							<div class="card-body">
								<img src="{{ url('public') }}/{{ $admin->foto }}" class="img-fluid profile-pic-container" style="width: 100px%">
								{{-- <input type="file" class="form-control" name="profile" accept=".jpg, .png, .jpeg"> --}}
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<div class="card card-default">
						<div class="card-header">

							<section class="content-header">
								<div class="container">
									<div class="row">
									</div>
								</div>
								<div class="card-body">
									<table class="table">
										<tr>
											<th>NIP</th>
											<td>:</td>
											<td>{{ $admin->nip }}</td>
										</tr>
										<tr>
											<th>Nama</th>
											<td>:</td>
											<td>{{ $admin->nama }}</td>
										</tr>
										<tr>
											<th>Email</th>
											<td>:</td>
											<td>{{ $admin->email }}</td>
										</tr>
										<tr>
											<th>Password</th>
											<td>:</td>
											<td>{{ $admin->password }}</td>
										</tr>
										<tr>
											<td colspan="3" class="text-center">
												<a href="#edit" class="btn btn-warning float-right" data-toggle="modal">
													<i class="fa fa-edit"></i>
													Edit
												</a>

											</td>
										</tr>
									</table>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="container">

		</form>
		<div class="modal fade slide-right" id="edit" tabindex="-1" role="dialog" style="display: none;"
			aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content-wrapper">
					<div class="modal-content">
						<form action="{{ url('Admin/profile', $admin->id) }}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="modal-header">
								<h5 class="modal-title">UPDATE PROFILE</h5>
							</div>
							<div class="modal-body ">
								<table class="table">
									<tr>
										<th>NIP</th>
										<td>:</td>
										<td>
											<input type="text" name="nip" value="{{ $admin->nip }}" class="form-control">
										</td>
									</tr>
									<tr>
										<th>Nama</th>
										<td>:</td>
										<td>
											<input type="text" name="nama" value="{{ $admin->nama }}" class="form-control">
										</td>
									</tr>
									<tr>
										<th>Email</th>
										<td>:</td>
										<td>
											<input type="text" name="email" value="{{ $admin->email }}" class="form-control">
										</td>
									</tr>
									<tr>
										<th>Password</th>
										<td>:</td>
										<td>
											<input type="text" name="password" class="form-control">
										</td>
									</tr>
									<tr>
										<th>Foto</th>
										<td>:</td>
										<td>
											<input type="file" name="foto" class="form-control">
										</td>
									</tr>
								</table>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">
									Batal
								</button>
								<button type="submit" class="btn btn-primary">
									Update
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
@endsection
