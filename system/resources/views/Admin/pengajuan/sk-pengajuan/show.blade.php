@extends('Layout.base')
@section('title', 'SIPAKPOL')
@section('content')
	<div class="content-header">
		<div class="container-fluid pt-3 col-md-12">
			<a href="{{ url('Admin/riwayat-pengajuan') }}" class="btn btn-xs btn-primary">
				<i class="fa fa-arrow-left"></i> Kembali
			</a>
			<div class="card card-dark card-outline mt-3">
				<div class="card-header align-items-center">
					<h5><b>Detail SK Fungsional </b></h5>
				</div>
				<div class="card-body">
					<div class="col-md-12">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<dl>
									<dt>Nama Dosen</dt>
									<dd>{{ $Skpengajuan->dosen->gelar_depan }}
										{{ $Skpengajuan->dosen->nama }}, {{ $Skpengajuan->dosen->gelar_belakang }}</dd>
								</dl>
							</div>
							<div class="col-md-6">
								<dl>
									<dt>Tanggal Pengajuan</dt>
									<dd>{{ $Skpengajuan->created_at }}</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
				<div class="card-header">
					<div class="card-title" style="align-items: center">
						<h5 style="text-align: center"><b>KELENGKAPAN BERKAS</b></h5>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<table class="table table-dataTable table-striped" data-sort>
								<thead>
									<th width="30px">No</th>
									<th>Nama File</th>
									<th width="100px">File</th>
									{{-- <th width="50px">Kelengkapan</th> --}}
								</thead>
								<tbody>
									<tr>
										<td> 1 </td>
										<td> SK Pengajuan <a href="" style="text-decoration: none" class="text-danger"></a> </td>
										<td>
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><i
													class="fa fa-download"></i>
												Unduh
											</button>
										<td>
											<div class="modal fade" id="modal-lg">
												<div class="modal-dialog modal-lg">
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title">SK Pengajuan</h4>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<embed style="width: 100%; height: 400px" src="{{ url("public/$Skpengajuan->filesk") }}"
																type="application/pdf">
														</div>

													</div>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
	</div>
	</div>
	</div>
@endsection
