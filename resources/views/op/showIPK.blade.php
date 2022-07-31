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
							<h3 class="panel-title">Tabel IPK</h3>


						</div>
						<div class="panel-body">
							<table class="table">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Tahun Ajaran</th>
										<th>Semester</th>
										<th>IPK</th>
										<th>Aksi</th>

									</tr>
									@foreach($mahasiswa->ipk as $m)
									<tr>
										<td>{{$m->mahasiswa->Nama}}</td>
										<td>{{$m->tahun_ajaran}}</td>
										<td>{{$m->semester}}</td>
										<td>{{$m->ipk}}</td>
										<td>

											<a href="/ipk/{{$m->id}}/edit" class="btn btn-warning fa fa-pencil"></a>
											<a href="/ipk/{{$m->id}}/hapus" class="btn btn-danger fa fa-trash"></a>
										</td>
										@endforeach
									</tr>

								</thead>
								<tbody>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit IPK</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="/ipkcreate" method="POST">
						{{csrf_field()}}
						<div class="form-groups ">
							<label>Nama</label>
							<input name="mahasiswa_id" id="mahasiswa_id" class="form-control" value="{{$m->nama}}">{{$m->Nama}}</input>
						</div>
						<div class="form-group">
							<label for="">Tahun Ajaran</label>
							<select name="tahun_ajaran" id="tahun_ajaran" class="form-control">
								<option value="2022/2023">2022/2023</option>
								<option value="2023/2024">2023/2024</option>
								<option value="2024/2025">2024/2025</option>
								<option value="2025/2026">2025/2026</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">semester</label>
							<select name="semester" id="semester" class="form-control">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">IPK</label>
							<input type="text" class="form-control" name="ipk">
						</div>


						<button type="submit" class="btn btn-primary float-right">Submit</button>
					</form>
				</div>
			</div>
		</div>
		@endsection