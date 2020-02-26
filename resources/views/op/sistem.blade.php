@extends('layouts.master')
@section('content')
<style>
    .width{
        width : 900px;
    }
    .lebar {
        width: 300px;
    }
</style>

<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-6">
							<!-- BASIC TABLE -->
							<div class="panel width">
								<div class="panel-heading">
									<h3 class="panel-title">Upload File</h3>
									
									
								</div>
								<div class="panel-body ">
                                <label for=""> Input Nilai</label>
                                <div class="form-group">
                                <input type="file" class="form-control lebar">
                                </div>
                                <button type="submit" class="btn btn-primary"> submit</button>
									
									
								</div>
                                
							</div>
                            </div>
                            </div>
                            </div>
                            </div>

@endsection