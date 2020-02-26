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
									<h3 class="panel-title">Konsultasi</h3>
									
									
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>Nama</th>
												<th>Nim</th>
												<th>Kategori</th>
												<th>Pesan</th>
												<th>Tanggal</th>
                                                <th>Aksi</th>
												
											</tr>
											@foreach($chat as $c)
											<tr>
											<td><a href="{{route('showChat',$c)}}">{{$c->mahasiswa->Nama}}</a></td>
											<td><a href="#">{{$c->mahasiswa->Nim}}</a></td>
											<td>{{$c->subjek}}</td>
											<td>{{$c->pesan}}</td>
											<td>{{$c->created_at}}</td>
                                            <td>
											<a href="#" class="btn btn-primary ">Balas</a>
												@endforeach
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
                            </div>
                            </div>
@endsection