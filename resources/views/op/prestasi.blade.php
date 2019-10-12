@extends('layouts.master')
@section('content')
<style>
.panel{
    width :900px;
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
									<h3 class="panel-title">Tabel Prestasi</h3>
									<button class="right"><a href="/post">tambah data</a></button>
									
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>Nama</th>
												<th>Prestasi-1</th>
												<th>Prestasi-2</th>
												<th>Prestasi-3</th>
												
											</tr>
											
											<tr>
											<td></td>
											<td></td>
											<td></td>
                                            <td></td>
											<td>
											<a href="#" class="btn btn-warning fa fa-pencil"></a>
											<a href="#" class="btn btn-danger fa fa-trash" ></a>	
											</td>								
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
@endsection