@extends('layouts.master')
@section('content')
<!-- MAIN -->
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							
								<!-- TABBED CONTENT -->
								<div class="custom-tabs-line tabs-line-bottom left-aligned">
									<ul class="nav" role="tablist">
										<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Akademik</a></li>
										<li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">History</a></li>
                    
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab-bottom-left1">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							Tambahkan Pesan Anda
							</button>
							<br>
							<br>
							<table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Dari</th>
      <th scope="col">Subjek</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($chat as $c)
    <tr>
      
      <th>{{$c->mahasiswa->dosen->Nama}}</th>
      <th ><a href="{{route('Chatmhs',$c)}}">{{$c->subjek}}</a></th>
      
    </tr>
    @endforeach
   
  </tbody>
</table>
										
									</div>

									<div class="tab-pane fade" id="tab-bottom-left2">
										<table class="table table-hover">
                      <thead> 
                      <tr>
                      <th>Subjek</th>
                      <th>Waktu</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($chat as $c)
                      <tr>
                      <td><a href="{{route('Chatmhs',$c)}}">{{$c->subjek}}</a></td>
                      <td>{{$c->created_at->format('d, M Y')}}</td>
                      
                      </tr>
                      @endforeach
                      </tbody>
                    
                    </table>
									</div>


                  
								</div>
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukkan Pesan Anda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/chat" method='POST'>
        {{csrf_field()}}
		<div class="form-group">
    <label for="exampleInputEmail1">To</label>
    <div class="form-group">
    <select name="dosen_id" id="" class="form-control">
    <option value="{{Auth::user()->mahasiswa->dosen->id}}" readonly>{{Auth::user()->mahasiswa->dosen->Nama}}</option>
    
    </select>
    </div>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Subjek</label>
    <input type="text" name="subjek" class="form-control"  placeholder="masukkan subjek">
  </div>
  <div class="form-group">
  <textarea name="pesan" id="pesan" cols="30" rows="10" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
		
		</form>
      </div>
      
    </div>
  </div>
</div>

								<!-- END TABBED CONTENT -->
							
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
@endsection
