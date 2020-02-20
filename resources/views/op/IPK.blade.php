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
									<h3 class="panel-title">Tabel IPK</h3>
									<i class="fa fa-user-plus right" data-toggle="modal" data-target="#exampleModal"></i>
									
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>Nama</th>
												<th>Nim</th>
												<th>Aksi</th>
												
												
											</tr>
											@foreach($mahasiswa as $m)
											<tr>
											<td>{{$m->Nama}}</td>
											<td>{{$m->Nim}}</td>
											
											<td>
											
											<a href="/ipk/{{$m->id}}" class="btn btn-info fa fa-eye"></a>
												
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/ipkcreate" method="POST">
        {{csrf_field()}}
            <div class="form-groups ">
              <label>Nama</label>
              <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
			  @foreach($mahasiswa as $m)
			  <option value="{{$m->id}}">{{$m->Nama}}</option>
			  @endforeach
			  </select>
			 
            </div>
			<div class="form-group">
			<label for="">Tahun Ajaran</label>
			<select name="tahun_ajaran" id="tahun_ajaran" class="form-control">
			<option value="2016/2017">2016/2017</option>
			<option value="2017/2018">2017/2018</option>
			<option value="2018/2019">2018/2019</option>
			<option value="2019/2020">2019/2020</option>
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