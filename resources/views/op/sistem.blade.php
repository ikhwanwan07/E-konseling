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
                                <td>{{$data->nim}}</td>
								<td>{{$data->nama}}</td>
								<td>{{$data->ipk1}}</td>
								<td>{{$data->ipk2}}</td>
								<td>{{$data->ipk3}}</td>
								<td>{{$data->ipk4}}</td>
								<td>{{$data->ipk5}}</td>
                                

                                
                                </tr>
                                @endforeach
                                
                                </tbody>
                                
                                </table>

                                <label for=""> tambah cluster</label>
                                <div class="form-group">
                                <input type="text" >
                                </div>
                                <button type="submit" class="btn btn-primary"><a href="/proses"> proses</a>   </button>
                                
                                
                                </div>
                                
							</div>
                            </div>
                            </div>
                            </div>
                            </div>

@endsection