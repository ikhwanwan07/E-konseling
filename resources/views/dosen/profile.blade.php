@extends('layouts.master')
@section('content')

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
										<h3 class="name">{{$lihat->Nama}}</h3>
										<span class="online-status status-available">Mahasiswa active</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
												6 <span>Semester</span>
											</div>
											<div class="col-md-4 stat-item">
												3,2 <span>IPK</span>
											</div>
											<div class="col-md-4 stat-item">
												12<span>SKS</span>
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
											<li>DPA<span>{{$lihat->dosen->Nama}}</span></li>
											<li>Alamat<span>{{$lihat->alamat}}</span></li>
											<li>Email <span>{{$lihat->email}}</span></li>
											<li>Nim<span>{{$lihat->Nim}}</span></li>
											<li>Tipe<span>{{$lihat->tipe->nama}}</span></li>
										</ul>
									</div>
									
									
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<h4 class="heading">{{$lihat->name}} Awards</h4>
								<!-- AWARDS -->
								<div class="awards">
									<div class="row">
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="lnr lnr-sun award-icon"></span>
												</div>
												<span>Juara 1 Turnmaen bola UII</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="lnr lnr-clock award-icon"></span>
												</div>
												<span>Ketua LEM FTI</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="lnr lnr-magic-wand award-icon"></span>
												</div>
												<span>IPK tertinggi</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<span class="lnr lnr-heart award-icon"></span>
												</div>
												<span>Anggota Kosmik</span>
											</div>
										</div>
									</div>
									
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
        categories: {!! json_encode($data) !!},
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