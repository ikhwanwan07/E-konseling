@extends('layouts.master')
@section('content')
<style>
	.panel {
		width: 900px;
	}
</style>
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-6">
					<!-- BASIC TABLE -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Tabel jadwal</h3>
							<i class="fa fa-user-plus right" data-toggle="modal" data-target="#exampleModal"></i>

						</div>
						<div class="panel-body">
							<table class="table">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Nama Matkul</th>
										<th>Hari</th>
										<th>Jam</th>


									</tr>
									@foreach($jadwal as $jadwal)
									<tr>
										<td>{{$jadwal->dosen->Nama}}</td>
										<td>{{$jadwal->hari}}</td>
										<td>{{$jadwal->jam}}</td>
										<td>
											<a href="#" class="btn btn-warning fa fa-pencil"></a>
											<a href="#" class="btn btn-danger fa fa-trash"></a>
										</td>
									</tr>
									@endforeach
								</thead>
								<tbody>

								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="documenllt">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Form Nilai</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="#" method="POST">
									{{csrf_field()}}
									<div class="form-group">
										<label>Nama</label>
										<select name="" class="form-control">
											<option value=""></option>
										</select>
									</div>
									<div class="form-group">
										<label>Nama Mata Kuliah</label>
										<select name="" id="" class="form-control">
											<option value=""></option>
										</select>
									</div>
									<div class="form-group">
										<label>SKS</label>
										<select name="tipe" class="form-control">
											<option value="">0</option>
											<option value="">1</option>
											<option value="">2</option>
											<option value="">3</option>
											<option value="">4</option>
											<option value="">5</option>
											<option value="">6</option>

										</select>
									</div>
									<div class="form-group">
										<label for="">Hari</label>
										<select name="tipe" class="form-control">
											<option value="">Senin</option>
											<option value="">Selasa</option>
											<option value="">Rabu</option>
											<option value="">Kamis</option>
											<option value="">Jumat</option>
											<option value="">Sabtu</option>
											<option value="">Minggu</option>


										</select>
									</div>
									<div class="form-group">
										<label>Jam</label>
										<select name="tipe" class="form-control">
											<option value="">A</option>
											<option value="">A-</option>
											<option value="">A/B</option>
											<option value="">B+</option>
											<option value="">B</option>
											<option value="">B/C</option>
											<option value="">C+</option>
											<option value="">C</option>
											<option value="">C-</option>
											<option value="">D</option>
											<option value="">E</option>
											<option value="">F</option>

										</select>
									</div>
									<button type="submit" class="btn btn-primary float-right">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection