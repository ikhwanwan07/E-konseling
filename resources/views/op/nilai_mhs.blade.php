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
									<table class="table">
										<thead>
											<tr>
												<th>Nama</th>
												<th>Nama Matkul</th>
												<th>Th Ajaran</th>
												<th>Semester</th>
												<th>SKS</th>
												<th>Nilai</th>
												<th>Aksi</th>
												
											</tr>
											
											<tr>
											<td></td>
											<td></td>
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
                <input name="Nama"type="text" class="form-control" id="nama"  placeholder="Masukan nama">
              </div>
              <div class="form-group" >
                <label >Nama Mata Kuliah</label>
                <input name="matkul"type="text" class="form-control" id="matkul"  placeholder="Mata Kuliah">
              </div>
              <div class="form-group">
                <label >Tahun ajaran</label>
				<select name="tipe" class="form-control"  >
                  <option value="">2016/2017</option>
                  <option value="">2017/2018</option>
                  <option value="">2018/2019</option>
                  <option value="">2019/2020</option>
				  <option value="">2020/2021</option>
				  <option value="">2021/2022</option>
                  
              </select>
              </div>
              <div class="form-group">
                <label >Semester</label>
                <select class="form-control">
				<option value="1">Ganjil</option>
				<option value="2">Genap</option>
				</select>
              </div>
			  <div class="form-group">
			  <label for="">SKS</label>
			  <input type="text" class="form-control" placeholder="SKS">
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