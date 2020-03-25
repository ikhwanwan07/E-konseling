@extends('layouts.master')
@section('content')
<style>
    .width{
        width : 900px;
    }
    .lebar {
        width: 300px;
    }
</style>

<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<!-- BASIC TABLE -->
					<div class="panel width">
						<div class="panel-heading">
							<h3 class="panel-title">Upload File</h3>
						</div>
						<div class="panel-body ">
							<button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
								IMPORT EXCEL
							</button>

							<!-- Import Excel -->
							<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<form method="post" action="/mahasiswa/import_excel" enctype="multipart/form-data">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
											</div>
											<div class="modal-body">
					
												{{ csrf_field() }}
					
												<label>Pilih file excel</label>
												<div class="form-group">
													<input type="file" name="file" required="required">
												</div>
					
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Import</button>
											</div>
										</div>
									</form>
								</div>
							</div>	
						</div>
						<div class="panel-body">
							<table class="table table-bordered">
								<thead> 
									<tr>
									<th>NIM</th>
									<th>Nama</th>
									<th>IPK semester 1</th>
									<th>IPK semester 2</th>
									<th>IPK semester 3</th>
									<th>IPK semester 4</th>
									<th>IPK semester 5</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data as $d)
										<tr>
											<td>{{$d->nim}}</td>
											<td>{{$d->nama}}</td>
											<td>{{$d->ipk_sem_1}}</td>
											<td>{{$d->ipk_sem_2}}</td>
											<td>{{$d->ipk_sem_3}}</td>
											<td>{{$d->ipk_sem_4}}</td>
											<td>{{$d->ipk_sem_5}}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
							<label for="">Insert Cluster</label>
							<div class="form-group">
								<input type="number" name="cluster" id="cluster" min="1">
								<input type="hidden" name="url" id="url" value="{{ url('') }}">
							</div>
							<button type="submit" class="btn btn-primary" id="submit-btn">proses</a></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('custom_script')
	<script>
		$(function(){
			// fungsi untuk generate hasil dari clustering KMeans
			$('#submit-btn').click(function(){
				var url = $('#url').val()
				var cluster = $('#cluster').val()
				$.ajax({
					'type'		: 'GET',
					'dataType' 	: 'json',
					'url'		: url+'/proses/'+cluster
				}).done(function(data){
					console.log(data)

				}).fail(function(data){
					console.log('failed to retrieve clustering result from KMeans')
				})
			})
		})
	</script>
	
@endsection

