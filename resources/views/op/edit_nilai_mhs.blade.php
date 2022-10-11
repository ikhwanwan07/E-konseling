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
									<h3 class="panel-title">EditNilai Mahasiswa</h3>
									{{-- <i class="fa fa-user-plus right" data-toggle="modal" data-target="#exampleModal"></i> --}}
									
								</div>
								<div class="panel-body">
									<form action="/update-nilai-mhs/{{$dataNilai->id}}" method="POST">
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
											  <select name="matkul_id" id="" class="form-control" >
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
							<!-- Modal -->

                            </div>
                            </div>
@endsection