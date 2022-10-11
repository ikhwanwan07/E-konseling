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
											<a href="/edit-nilai-mhs/{{$m->id}}" class="btn btn-warning fa fa-pencil" ></a>
											<a href="/delete-nilai-mhs/{{$m->id}}" class="btn btn-danger fa fa-trash"></a>
												
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
        <form action="/add-nilai-mhs/{{$m->id}}" method="POST">
          {{csrf_field()}}
              <div class="form-group" >
                <label >Nama</label>
				 <select name="mahasiswa_id" id="" class="form-control">
				 @foreach($mhs as $m)
				<option value="{{$m->id}}">{{$m->Nama}}</option>
				@endforeach
				</select>
              </div>
              <div class="form-group" >
                <label >Nama Mata Kuliah</label>
				<select name="matkul_id" id="" class="form-control">
				@foreach($matkul as $matkuls)
				<option value="{{$matkuls->id}}">{{$matkuls->Mata_kuliah}}</option>
				@endforeach
				</select>
                
              </div>
			   <div class="form-group">
                <label >Tahun ajaran</label>
				<select name="nilai" class="form-control"  >
                  <option value="A">A</option>
                  <option value="A-">A-</option>
                  <option value="A/B">A/B</option>
                  <option value="B+">B+</option>
				  <option value="B">B</option>
				  <option value="B/C">B/C</option>
				  <option value="C+">C+</option>
				  <option value="C">C</option>
				  <option value="C-">C-</option>
				  <option value="D">D</option>
				  <option value="E">E</option>
				  <option value="F">F</option>
                  
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