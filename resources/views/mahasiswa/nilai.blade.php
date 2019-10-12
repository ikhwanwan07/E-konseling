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
											<table class="table table-bordered">
												<thead>
													<tr>
														<th>Mata Kuliah</th>
														<th>SKS</th>
														<th>Hari</th>
														<th>Jam</th>
														<th>Nilai</th>
														
													</tr>
												</thead>
												<tbody>
                                                <tr>
                                                    <td>Kalkulus</td>
                                                    <td>3</td>
                                                    <td>Senin</td>
													<td>08.00</td>
													<td>A</td>
													
                                                </tr>
                                                <tr>
                                                    <td>Sistem Informasi</td>
                                                    <td>2</td>
                                                    <td>Selasa</td>
													<td>09.00</td>
													<td>B</td>
                                                </tr>
                                                <tr>
                                                    <td>Matematika Diskrit</td>
                                                    <td>4</td>
                                                    <td>Selasa</td>
													<td>09.00</td>
													<td>C</td>
                                                </tr>
                                                <tr>
                                                    <td>Basis Data</td>
                                                    <td>3</td>
                                                    <td>Selasa</td>
													<td>09.00</td>
													<td>B</td>
                                                </tr>
													
												</tbody>
											</table>
										</div>
										<form class="navbar-form navbar-left">
										<div class="input-group">
											<input type="text" value="" class="form-control" placeholder="Cari berdasarkan semester">
											<span class="input-group-btn"><button type="button" class="btn btn-primary">Cari</button></span>
										</div>
										</form>
																			
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