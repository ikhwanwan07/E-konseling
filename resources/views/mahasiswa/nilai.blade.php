@extends('layouts.master')
@section('content')

<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							
							<!-- RIGHT COLUMN -->
							<div class="profile">
								<h4 class="heading">Nilai Kuliah</h4>
								
							
								<!-- TABBED CONTENT -->
								
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab-bottom-left1">
									<div class="table-responsive">
											<table class="table table-stripped">
												<thead>
													<tr>
														<th>Kode</th>
														<th>Mata Kuliah</th>
														<th>SKS</th>
														<th>Nilai</th>
														
													</tr>
												</thead>
												<tbody>
												@foreach($nilai as $n)
                                                <tr>
                                                    <td>{{$n->kode}}</td>
                                                    <td>{{$n->Mata_kuliah}}</td>
                                                    <td>{{$n->SKS}}</td>
													<td>{{$n->pivot->nilai}}</td>
													
													
                                                </tr>
                                               @endforeach
                                                
													
												</tbody>
											</table>
										</div>
										
																			
									</div>
									
									</div>
								</div>
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
@endsection