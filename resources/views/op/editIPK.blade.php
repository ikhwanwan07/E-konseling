@extends('layouts.master')
@section('content')
<style>
	.panel {
		width: 900px;
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
							<h3 class="panel-title">Edit IPK</h3>


						</div>
						<div class="panel-body">
							<div class="modal-body">
								<form action="/ipk/{{$dataipk->id}}/update" method="POST">
									{{csrf_field()}}
								
										<input type="hidden" name="mahasiswa_id" id="mahasiswa_id" class="form-control" value="{{$dataipk->mahasiswa_id}}">
								
									</div>
									<div class="form-group">
										<label for="">Tahun Ajaran</label>
										<select name="tahun_ajaran" id="tahun_ajaran" class="form-control" value={{$dataipk->tahun_ajaran}}>
											<option value="2022/2023">2022/2023</option>
											<option value="2023/2024">2023/2024</option>
											<option value="2024/2025">2024/2025</option>
											<option value="2025/2026">2025/2026</option>
										</select>
									</div>
									<div class="form-group">
										<label for="">semester</label>
										<select name="semester" id="semester" class="form-control" value="{{$dataipk->semester}}">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
									</div>
									<div class="form-group">
										<label for="">IPK</label>
										<input type="text" class="form-control" name="ipk" value="{{$dataipk->ipk}}">
									</div>
			
			
									<button type="submit" class="btn btn-primary float-right">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
		@endsection