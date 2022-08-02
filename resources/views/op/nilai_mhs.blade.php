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
									<h3 class="panel-title">Tabel Nilai Mahasiswa</h3>
									<i class="fa fa-user-plus right" data-toggle="modal" data-target="#exampleModal"></i>
									
								</div>
								<div class="panel-body">
									<table class="table table-stripped">
										<thead>
											<tr>
												<th>Nama</th>
												<th>Nim</th>
												<th>Aksi</th>
											</tr>
											</thead>
										<tbody>
										@foreach($mhs as $m)
											<tr>
											<td>{{$m->Nama}}</td>
											<td>{{$m->Nim}}</td>	
											<td>
											<a href="/nilai/{{$m->id}}" class="btn btn-info fa fa-eye"></a>
												
											</td>								
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
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
      
    </div>
  </div>
</div>
                            </div>
                            </div>
@endsection