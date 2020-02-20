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
								<h4 class="heading">Ikhwan Awards</h4>
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
								<div class="profile">
								<h4 class="heading">IPK</h4>
								<svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300" class="ct-chart-line" style="width: 100%; height: 300;"><g class="ct-grids"><line y1="265" y2="265" x1="50" x2="717.75" class="ct-grid ct-vertical"></line><line y1="229.28571428571428" y2="229.28571428571428" x1="50" x2="717.75" class="ct-grid ct-vertical"></line><line y1="193.57142857142856" y2="193.57142857142856" x1="50" x2="717.75" class="ct-grid ct-vertical"></line><line y1="157.85714285714286" y2="157.85714285714286" x1="50" x2="717.75" class="ct-grid ct-vertical"></line><line y1="122.14285714285714" y2="122.14285714285714" x1="50" x2="717.75" class="ct-grid ct-vertical"></line><line y1="86.42857142857142" y2="86.42857142857142" x1="50" x2="717.75" class="ct-grid ct-vertical"></line><line y1="50.71428571428572" y2="50.71428571428572" x1="50" x2="717.75" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="717.75" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M50,265L50,172.143L161.292,129.286L272.583,165L383.875,50.714L495.167,157.857L606.458,165L717.75,86.429L717.75,265Z" class="ct-area"></path></g><g class="ct-series ct-series-b"><path d="M50,265L50,236.429L161.292,157.857L272.583,207.857L383.875,93.571L495.167,129.286L606.458,65L717.75,22.143L717.75,265Z" class="ct-area"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="270" width="111.29166666666667" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 111px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Mon</span></foreignObject><foreignObject style="overflow: visible;" x="161.29166666666669" y="270" width="111.29166666666667" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 111px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Tue</span></foreignObject><foreignObject style="overflow: visible;" x="272.58333333333337" y="270" width="111.29166666666666" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 111px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Wed</span></foreignObject><foreignObject style="overflow: visible;" x="383.875" y="270" width="111.29166666666669" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 111px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Thu</span></foreignObject><foreignObject style="overflow: visible;" x="495.1666666666667" y="270" width="111.29166666666669" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 111px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Fri</span></foreignObject><foreignObject style="overflow: visible;" x="606.4583333333334" y="270" width="111.29166666666663" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 111px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sat</span></foreignObject><foreignObject style="overflow: visible;" x="717.75" y="270" width="30" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sun</span></foreignObject><foreignObject style="overflow: visible;" y="229.28571428571428" x="10" height="35.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">10</span></foreignObject><foreignObject style="overflow: visible;" y="193.57142857142856" x="10" height="35.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">15</span></foreignObject><foreignObject style="overflow: visible;" y="157.85714285714283" x="10" height="35.71428571428571" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">20</span></foreignObject><foreignObject style="overflow: visible;" y="122.14285714285714" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">25</span></foreignObject><foreignObject style="overflow: visible;" y="86.42857142857142" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">30</span></foreignObject><foreignObject style="overflow: visible;" y="50.71428571428572" x="10" height="35.714285714285694" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">35</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">40</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">45</span></foreignObject></g></svg>
								
								
								
								
								
								
								</div>
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
@endsection