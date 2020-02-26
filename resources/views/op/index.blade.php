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
								<h4 class="heading">Jadwal Konsultasi  <span class="bg-primary"></span></h4>
								
							
								<!-- TABBED CONTENT -->
								
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab-bottom-left1">
									<div class="table-responsive">
											<table class="table table-stripped">
												<thead>
													<tr>
														
														<th>Hari</th>
														<th>Jam</th>
														
														
													</tr>
												</thead>
												<tbody>
												
                                                <tr>
                                                    <td>Senin</td>
                                                    <td class="bg-danger">Off</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Selasa</td>
                                                    <td class="bg-success">09.00 </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Rabu</td>
                                                    <td class="bg-success">13.00</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Kamis</td>
                                                    <td class="bg-danger">Off</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Jumat</td>
                                                    <td class="bg-success">13.00</td>
                                                    
                                                </tr>
                                               
                                                
													
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