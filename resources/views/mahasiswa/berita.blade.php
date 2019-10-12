@extends('layouts.master')
@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container">
				<div class="row">
				<div class="col-md-8">
				@foreach($posts as $post)
				<div class="panel panel-default">
				<div class="panel-heading"><a href="{{route('lihat',$post)}}">{{$post->title}}  </a> <small class="right">{{$post->created_at->diffForHumans() }}</small></div>
				
				<div class="panel-body">
				<p> {{str_limit($post->content,100,'...')}} </p>
				</div>
				</div>
				@endforeach
				{{ $posts->links() }}
				
				</div>
				</div>
				</div>
			</div>
</div>
@endsection