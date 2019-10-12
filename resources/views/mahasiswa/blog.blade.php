@extends('layouts.master')
@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container">
				<div class="row">
				<div class="col-md-8">
				<div class="panel panel-default">
					
				<div class="panel-heading">{{$post_detail->title}} </div>
				<div class="panel-body">
				<p> {{ $post_detail->content }} </p>
				
				</div>
				

				</div>
				
				
				
				
				</div>
				</div>
				</div>
			</div>
</div>
@endsection