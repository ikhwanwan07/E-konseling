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
									<h3 class="panel-title">Tabel Artikel</h3>
									<button class="right"><a href="/post">tambah data</a></button>
									
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>Judul</th>
												<th>kategori</th>
												<th>Konten</th>
												<th>Aksis</th>
												
											</tr>
											@foreach($posts as $post)
											<tr>
											<td>{{$post->title}}</td>
											<td>{{$post->kategori}}</td>
											<td>{{str_limit($post->content,'100','. . .')}}</td>
											<td>
											<a href="/Berita/{{$post->id}}/edit" class="btn btn-warning fa fa-pencil"></a>
											<a href="/Berita/{{$post->id}}/hapus" class="btn btn-danger fa fa-trash" ></a>	
											</td>								
											</tr>
											@endforeach
										</thead>
										<tbody>
											
										</tbody>
										
									</table>
									{{$posts->links()}}
								</div>
							</div>
                            </div>
                            </div>
                            </div>
                            </div>
@endsection