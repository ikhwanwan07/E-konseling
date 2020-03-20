@extends('layouts.master')
@section('content')

<style>
.panel
{

    width:600px;
}

</style>


<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-6">
							<!-- BASIC TABLE -->
							<div class="panel ">
								<div class="panel-heading">
									<h3 class="panel-title">Jadwal Konsultasi</h3>
									<i class="fa fa-user-plus right" data-toggle="modal" data-target="#exampleModal"></i>
									
								</div>
								<div class="panel-body">
                                <table class="table table-hover">

<tr>
    <th>Hari    </th>
    <th>Jam/Status</th>
    <th>Aksi</th>
    
    <th></th>

</tr>
@foreach($jadwal as $j)
    <tr>
    <td>{{$j->hari}}</td>
    <td>{{$j->jam}}</td>
    <td>
    <a href="/jadwal/{{$j->id}}/edit" class="btn btn-warning fa fa-pencil"></a>
		<a href="/jadwal/{{$j->id}}/hapus" class="btn btn-danger fa fa-trash" ></a>
    </td>
    
    </tr>
   @endforeach
</table>
                                                            
                                
                                </div>


                                
									
									
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/tambahjadwal" method="POST">
  {{csrf_field()}}
      <div class="form-group">
      
      <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
      <input type="text" name="senin" class="form-control" value="Senin" readonly >
      <br>
      <input type="text" name="selasa" class="form-control" value="Selasa" readonly>
      <br>
      <input type="text" name="rabu" class="form-control"value="Rabu" readonly >
      <br>
      <input type="text" name="kamis" class="form-control" value="Kamis" readonly>
      <br>
      <input type="text" name="jumat" class="form-control" value="Jumat" readonly>
      <br>
      <input type="text" name="sabtu" class="form-control" value="Sabtu" readonly>
      <br>
      </div>
      <div class="col-md-6 ml-auto" >
     
      <select name="jam1" id="jam" class="form-control">
      <option value="OFF">OFF</option>
      <option value="08.00">08.00</option>
      <option value="08.30">08.30</option>
      <option value="09.00">09.00</option>
      <option value="09.30">09.30</option>
      <option value="10.00">10.00</option>
      <option value="10.30">10.30</option>  
      <option value="11.00">11.00</option>
      <option value="11.30">11.30</option>
      <option value="12.00">12.00</option>
      <option value="12.30">12.30</option>
      <option value="13.00">13.00</option>
      <option value="14.00">14.00</option>
      <option value="15.00">15.00</option>
      <option value="16.00">16.00</option>

      </select>
      <br>
      <select name="jam2" id="jam" class="form-control">
      <option value="OFF">OFF</option>
      <option value="08.00">08.00</option>
      <option value="08.30">08.30</option>
      <option value="09.00">09.00</option>
      <option value="09.30">09.30</option>
      <option value="10.00">10.00</option>
      <option value="10.30">10.30</option>  
      <option value="11.00">11.00</option>
      <option value="11.30">11.30</option>
      <option value="12.00">12.00</option>
      <option value="12.30">12.30</option>
      <option value="13.00">13.00</option>
      <option value="14.00">14.00</option>
      <option value="15.00">15.00</option>
      <option value="16.00">16.00</option>

      </select>
      <br>
      <select name="jam3" id="jam" class="form-control">
      <option value="OFF">OFF</option>
      <option value="08.00">08.00</option>
      <option value="08.30">08.30</option>
      <option value="09.00">09.00</option>
      <option value="09.30">09.30</option>
      <option value="10.00">10.00</option>
      <option value="10.30">10.30</option>  
      <option value="11.00">11.00</option>
      <option value="11.30">11.30</option>
      <option value="12.00">12.00</option>
      <option value="12.30">12.30</option>
      <option value="13.00">13.00</option>
      <option value="14.00">14.00</option>
      <option value="15.00">15.00</option>
      <option value="16.00">16.00</option>

      </select>
      <br>
      <select name="jam4" id="jam" class="form-control">
      <option value="OFF">OFF</option>
      <option value="08.00">08.00</option>
      <option value="08.30">08.30</option>
      <option value="09.00">09.00</option>
      <option value="09.30">09.30</option>
      <option value="10.00">10.00</option>
      <option value="10.30">10.30</option>  
      <option value="11.00">11.00</option>
      <option value="11.30">11.30</option>
      <option value="12.00">12.00</option>
      <option value="12.30">12.30</option>
      <option value="13.00">13.00</option>
      <option value="14.00">14.00</option>
      <option value="15.00">15.00</option>
      <option value="16.00">16.00</option>

      </select>
      <br>
      <select name="jam5" id="jam" class="form-control">
      <option value="OFF">OFF</option>
      <option value="08.00">08.00</option>
      <option value="08.30">08.30</option>
      <option value="09.00">09.00</option>
      <option value="09.30">09.30</option>
      <option value="10.00">10.00</option>
      <option value="10.30">10.30</option>  
      <option value="11.00">11.00</option>
      <option value="11.30">11.30</option>
      <option value="12.00">12.00</option>
      <option value="12.30">12.30</option>
      <option value="13.00">13.00</option>
      <option value="14.00">14.00</option>
      <option value="15.00">15.00</option>
      <option value="16.00">16.00</option>

      </select>
      <br>
      <select name="jam6" id="jam" class="form-control">
      <option value="OFF">OFF</option>
      <option value="08.00">08.00</option>
      <option value="08.30">08.30</option>
      <option value="09.00">09.00</option>
      <option value="09.30">09.30</option>
      <option value="10.00">10.00</option>
      <option value="10.30">10.30</option>  
      <option value="11.00">11.00</option>
      <option value="11.30">11.30</option>
      <option value="12.00">12.00</option>
      <option value="12.30">12.30</option>
      <option value="13.00">13.00</option>
      <option value="14.00">14.00</option>
      <option value="15.00">15.00</option>
      <option value="16.00">16.00</option>

      </select>
      <br>
      
      </div>
    </div>
    </div>
<br>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
          </form>
      </div>
    </div>
  </div>


@endsection