@extends('layouts.master')
@section('content')
<style>

div .modal-lg {
width :70%;
margin: 150px auto;
}
</style>

<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="{{asset('admin/assets/img/user-medium.png')}}" class="img-circle" alt="Avatar">
										<h3 class="name">{{ Auth::user()->name }}</h3>
										<span class="online-status status-available">Mahasiswa active</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
											{{Auth::user()->mahasiswa->ipk->count()}} <span>Semester</span>
											</div>
											<div class="col-md-4 stat-item">
												3,2 <span>IPK</span>
											</div>
											<div class="col-md-4 stat-item">
												{{Auth::user()->mahasiswa->matkul->count()}}<span>SKS</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											<li>DPA<span>{{Auth::user()->mahasiswa->dosen->Nama}}</span></li>
											<li>Alamat<span>{{Auth::user()->mahasiswa->alamat}}</span></li>
											<li>Email <span>{{Auth::user()->email}}</span></li>
											<li>Nim<span>{{Auth::user()->mahasiswa->Nim}}</span></li>
											<li>tipe<span>{{Auth::user()->mahasiswa->tipe->nama}}</span></li>
										</ul>
									</div>
									
									
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<h4 class="heading">{{Auth::user()->name}} Awards</h4>
								<!-- AWARDS -->
								<div class="awards">
									<div class="row">
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<a href="" data-toggle="modal" data-target="#prestasi"><span class="lnr lnr-star award-icon"></span></a>
												</div>
												<span>Prestasi</span>
												<br>
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">Add</button>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<a href="" data-toggle="modal" data-target="#ukm"><span class="lnr lnr-clock award-icon"></span></a>
												</div>
												<span>UKM dan Organisasi</span>
												<br>
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add</button>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<a href="" data-toggle="modal" data-target="#karya"><span class="lnr lnr-magic-wand award-icon"></span></a>
												</div>
												<span>Karya Ilmiah</span> <br>
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">Add</button>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<a   data-toggle="modal" data-target="#magang"><span class="lnr lnr-location award-icon"></span></a>
												</div>
												<span>Magang</span>
												<br>
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#example">Add</button>
											</div>
										</div>
									</div>

									<!-- Modal prestasi-->
									<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Masukan prestasi anda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="form-group">
        <form action="">
		<input type="text" class="form-control" placeholder="masukkan input prestasi">
		</form>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal 1 -->

									<!-- Modal UKM-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Masukkan UKM yang anda ikuti</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="form-group">
        <form action="">
		<label for="">UKM</label>
		<select name="" id="" class="form-control">
		<option value="">pilih</option>
		<option value="">IFORY(Fotografi)</option>
		<option value="">GAPOERA(Gaming and production)</option>
		<option value="">PSC(Programming Club)</option>
		<option value="">INVOSE(Web Development)</option>
		<option value="">UII CYBER GUARD(Security and Hacking)</option>
		<option value="">BIGDVMachine Learning and Data()</option>
		</select>
		<label for="">Organisasi</label>
		<select name="" id="" class="form-control">
		<option value="">pilih</option>
		<option value="">HMTF</option>
		<option value="">LABMA</option>
		<option value="">DPM</option>
		<option value="">Marching Band</option>
		<option value=""></option>
		
		</select>
		</form>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal 2 -->
									<!-- Modal karya-->
									<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Masukkan Karya Ilmiah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="form-group">
        <form action="">
		<input type="text"class="form-control" placeholder="masukkan input">
		</form>
		</div>
		<div class="form-group">
		<input type="file" class="form-control">
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal 3 -->
									<!-- Modal Magang-->
									<div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="form-group">
        <form action="">
		<input type="text"class="form-control" placeholder="masukkan input">
		</form>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal 2 -->
						<!-- Modal prestasi-->
						<div class="modal fade" id="magang" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Data Magang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="">
	  <span>PT Gemophia , 2018</span>
	  
	  </div>
      
    </div>
  </div>
</div>
<!-- end modal 1 -->
									
									
									
								</div>
								<!-- END AWARDS -->
								<div class="panel">
								<div id="chartNilai"></div>
								</div>
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>

		<div class="modal fade" id="magang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Data Magang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        <span>PT gemopia 2017 , ui/ux designer</span>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="ukm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Data ukm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <ul>
	   <li>HMTF 2016 sebagai anggota</li>
	   <li>Menwa 2017</li>
	   <li>Kosmik 2017 divisi guitar</li>
	   
	   </ul>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="prestasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Data prestasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <ul>
	   <li>juara 1 lomba uni battlemappping</li>
	   <li>juara 1 lomba ui/ux designer</li>
	   <li>juara harapan lomba mobile apss design</li>
	   
	   </ul>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="karya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <ul>
	   <li>Sistem informasi akademik UGM </li>
	   <li>Sistem monitoring pertumbuhan tanaman, PKM 2018</li>
	   
	   
	   </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

		

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="{{asset('admin/highchart.js')}}"></script>

<script>
Highcharts.chart('chartNilai', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'IPK mahasiswa'
    },
    subtitle: {
        text: 'Uii.ac.id'
    },
    xAxis: {
        categories: {!!json_encode($data) !!},
        crosshair: true,
		title: {
            text: 'Semester'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'IPK'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'IPK',
        data: {!! json_encode($data2) !!},

    }]
});


</script>
@endsection