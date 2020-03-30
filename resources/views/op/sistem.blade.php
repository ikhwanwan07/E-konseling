@extends('layouts.master')
@section('content')
<style>
    .width{
        width : 900px;
    }
    .lebar {
        width: 300px;
    }

	.form-control {
		width: 200px;
	}
	.customize {
		margin-top : -2px;
		margin-bottom :10px;
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
													<input type="file" name="file" required="required" class="form-control">
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
								<input type="number" name="cluster" id="cluster" min="1" class="form-control">
								<input type="hidden" name="url" id="url" value="{{ url('') }}" class="form-control">
								<br>
								<button class="btn btn-primary customize" id="custom-btn">Customize</button>
							</div>
							<div id="customize-clustering" style="padding:10px; border:1px solid #ddd; margin-bottom:20px; display:none">
								<label for="">Custom Clustering</label>
								<div class="form-group"></div>
								<div class="form-group">
									<label for="iteration" style="font-weight: normal;">Jumlah Iterasi &nbsp;&nbsp;&nbsp;: </label>
									<input type="number" name="iteration" id="iteration" min="1" placeholder="iteration" class="form-control" disabled>
								</div>
								<div class="form-group">
									<label for="centroids" style="font-weight: normal;">Centroids [NIM] :</label>
									<input class="form-control" style="width:350px" type="text"   name="centroids" id="centroids" placeholder="... , ... , ... , ... , ... " disabled>
									Cth: <span>16523035,16523136,16523200</span>
								</div>
								<div class="form-group">
									<button id="cancel-btn">Cancel</button>
								</div>
							</div>
							<button type="submit" class="btn btn-primary" id="submit-btn">proses</a></button>
						</div>
					</div>
				</div>
			</div>
		</div>

		{{-- Output Clustering Proccess --}}
		<div class="container-fluid" id="clustering-result" style="display:none">
			<div class="row">
				<div class="col-md-6">
					<!-- BASIC TABLE -->
					<div class="panel width">
						<div class="panel-heading">
							<h3 class="panel-title" style="color:#676a6d"><b>Clustering Result</b></h3>
						</div>
						<div class="panel-body">
							<table class="table table-bordered">
								<thead> 
									<tr>
										<th>No.</th>
										<th>NIM</th>
										<th>IPK semester 1</th>
										<th>IPK semester 2</th>
										<th>IPK semester 3</th>
										<th>IPK semester 4</th>
										<th>IPK semester 5</th>
										<th>Cluster</th>
									</tr>
								</thead>
								<tbody id="cluster-tbody">
									
								</tbody>
							</table>
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
				var iteration = $('#iteration').val()
				var centroids = $('#centroids').val()

				if(iteration != ''){
					iteration = '/iteration/'+iteration
				}

				if(centroids != ''){
					centroids = '/centroids/'+centroids
				}

				$.ajax({
					'type'		: 'GET',
					'dataType' 	: 'json',
					'url'		: url+'/proses/'+cluster+ iteration + centroids
				}).done(function(data){
					console.log(data)
					$('#clustering-result').hide(250)
					$('#clustering-result').show(250)
					$('#cluster-tbody').html('')
					var prev_centroid = data.prev_centroid
					var result = data.result
					var prev_cluster = 0

					for(i = 0; i < result.length; i++){
						console.log(result[i].cluster+' != '+prev_cluster)
						if(result[i].cluster != prev_cluster){
							index_cluster = result[i].cluster - 1
							centroid = '<tr style="background-color:#4dd2ff; color:black"><td></td>'
							centroid +='<td>'+prev_centroid[index_cluster].label+'</td>'
							centroid +='<td>'+prev_centroid[index_cluster].ipk_sem_1.toFixed(2)+'</td>'
							centroid +='<td>'+prev_centroid[index_cluster].ipk_sem_2.toFixed(2)+'</td>'
							centroid +='<td>'+prev_centroid[index_cluster].ipk_sem_3.toFixed(2)+'</td>'
							centroid +='<td>'+prev_centroid[index_cluster].ipk_sem_4.toFixed(2)+'</td>'
							centroid +='<td>'+prev_centroid[index_cluster].ipk_sem_5.toFixed(2)+'</td>'
							centroid +='<td></td></tr>'
							$('#cluster-tbody').append(centroid)
							
							prev_cluster = result[i].cluster
						}
						
						row = '<tr><td>'+(i+1)+'</td>'
						row +='<td>'+result[i].nim+'</td>'
						row +='<td>'+result[i].ipk_sem_1+'</td>'
						row +='<td>'+result[i].ipk_sem_2+'</td>'
						row +='<td>'+result[i].ipk_sem_3+'</td>'
						row +='<td>'+result[i].ipk_sem_4+'</td>'
						row +='<td>'+result[i].ipk_sem_5+'</td>'
						row +='<td>'+result[i].cluster+'</td></tr>'
						$('#cluster-tbody').append(row)
					}

				}).fail(function(data){
					console.log('failed to retrieve clustering result from KMeans')
				})
			})

			$('#custom-btn').click(function(){
				$('#customize-clustering').show(250)
				$('#iteration').prop('disabled',false)
				$('#centroids').prop('disabled',false)
				$('#custom-btn').prop('disabled',true)
			})

			$('#cancel-btn').click(function(){
				$('#customize-clustering').hide(250);
				$('#iteration').prop('disabled',true)
				$('#centroids').prop('disabled',true)
				$('#custom-btn').prop('disabled',false)
			})
		})
	</script>
	
@endsection

