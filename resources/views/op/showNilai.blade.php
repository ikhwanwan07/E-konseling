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
									
									
								</div>
								<div class="panel-body">
									<table class="table table-stripped">
										<thead>
											<tr>
												<th>Kode </th>
												<th>Mata Kuliah</th>
												<th>SKS</th>
												<th>Nilai</th>
												<th>Aksi</th>
											</tr>
											</thead>
										<tbody>
										@foreach($mhs1->matkul as $m)
											<tr>
											<td>{{$m->kode}}</td>
											<td>{{$m->Mata_kuliah}}</td>
											<td>{{$m->SKS}}</td>
											<td>{{$m->pivot->nilai}}</td>	
											<td>
											<a href="#" class="btn btn-warning fa fa-pencil" data-toggle="modal" data-target="#exampleModal"></a>
											<a href="#" class="btn btn-danger fa fa-trash"></a>
												
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
      <div class="modal-body">
        <form action="#" method="POST">
          {{csrf_field()}}
              <div class="form-group" >
                <label >Nama</label>
				 <select name="" id="" class="form-control">
				 @foreach($mhs as $m)
				<option value="">{{$m->Nama}}</option>
				@endforeach
				</select>
              </div>
              <div class="form-group" >
                <label >Nama Mata Kuliah</label>
				<select name="" id="" class="form-control">
				@foreach($matkul as $matkuls)
				<option value="">{{$matkuls->Mata_kuliah}}</option>
				@endforeach
				</select>
                
              </div>
			   <div class="form-group">
                <label >Tahun ajaran</label>
				<select name="tipe" class="form-control"  >
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