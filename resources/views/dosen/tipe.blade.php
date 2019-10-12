@extends('layouts.master')
@section('content')

<style>
    .panel1 {
        margin: 70px 250px 50px 280px;
        width: 200px;
        padding: 0px;
    }
    .panel2 {
        margin: 100px 350px 50px 50px;
        width: 200px;
        padding: 0px;
    }
    .panel3 {
        margin: 100px 450px 50px 50px;
        width: 200px;
        padding: 0px;
    }


    .colom2 .panel{

      margin-top: -40px;
    }
    .colom1{
      background-color: lightblue;
    }
    .row1{
      background-color: blue;
    }
    .no-gutters {
  margin-right: 0;
  margin-left: 0;
}
  > .col,
  > [class*="col-"] {
    padding-right: 0;
    padding-left: 0;
  }

</style>

<div class="row">
						<div class="col-sm-12">
		            <div class="row">
                  <div class="col-sm-2">

                  </div>
                  <div class="col-sm-2">
                    <div class="panel panel3">
      								<div class="panel-heading btn-toggle-collapse">
      									<button class="panel-title btn-toggle-collapse">ENFJ</button>
      									<div class="right">
      										<button type="button" class="btn-toggle-collapse">
                            <i class="lnr lnr-chevron-up lnr-chevron-down btn-toggle-collapse"></i></button>
      									</div>
      								</div>
      								<div class="panel-body" style="display: none;">
      									<ul>Benar-benar hangat dan senang memegang nilai atau perasaan tentang orang lain</ul>
                        <ul>Memegang nilai harmoni dan memiliki keterampilan yang sangat baik</ul>
                        <ul>Benci hal-hal berlogika impersonal dan analisis.</ul>
                        <ul>Loyal dan juga jujur serta kreatif dan imajinatif.</ul>
                        <ul>Menyukai tantangan baru dan sensitif terhadap kritik serta perpecahan</ul>
      								</div>
      							</div>
                  </div>
                  <div class="col-sm-2">
                    <div class="panel panel3">
      								<div class="panel-heading">
      									<h3 class="panel-title btn-toggle-collapse">ENFP</h3>
      									<div class="right">
      										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up lnr-chevron-down"></i></button>

      									</div>
      								</div>
      								<div class="panel-body" style="display: none;">
      									<ul>Berorientasi pada proyek </ul>
                        <ul>Cerdas dan mampu serta hangat sehingga membuat banyak orang tertarik</ul>
                        <ul>Sangat intuitif dan perseptif tentang orang lain</ul>
                        <ul>Cenderung menempatkan kebutuhan orang lain dibanding dirinya sendiri</ul>
                        <ul>Dapat bekerja sama dan memiliki keterampilan komunikasi verbal yang baik</ul>
      								</div>
      							</div>
                  </div>
                  <div class="col-sm-2">
                    <div class="panel panel3">
      								<div class="panel-heading">
      									<h3 class="panel-title btn-toggle-collapse">Panel Default</h3>
      									<div class="right">
      										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up lnr-chevron-down"></i></button>

      									</div>
      								</div>
      								<div class="panel-body" style="display: none;">
      									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
      								</div>
      							</div>
                  </div>
                  <div class="col-sm-2">
                    <div class="panel panel3">
      								<div class="panel-heading">
      									<h3 class="panel-title btn-toggle-collapse">Panel Default</h3>
      									<div class="right">
      										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up lnr-chevron-down"></i></button>

      									</div>
      								</div>
      								<div class="panel-body" style="display: none;">
      									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
      								</div>
      							</div>
                  </div>


                </div>

							<!-- END PANEL DEFAULT -->
						</div>
						</div>
            <div class="row colom2">
            						<div class="col-sm-12">
            		            <div class="row">
                              <div class="col-sm-2">

                              </div>
                              <div class="col-sm-2">
                                <div class="panel panel3">
                  								<div class="panel-heading">
                  									<h3 class="panel-title btn-toggle-collapse">Panel Default</h3>
                  									<div class="right">
                  										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up lnr-chevron-down"></i></button>

                  									</div>
                  								</div>
                  								<div class="panel-body" style="display: none;">
                  									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                  								</div>
                  							</div>
                              </div>
                              <div class="col-sm-2">
                                <div class="panel panel3">
                  								<div class="panel-heading">
                  									<h3 class="panel-title btn-toggle-collapse">Panel Default</h3>
                  									<div class="right">
                  										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up lnr-chevron-down"></i></button>

                  									</div>
                  								</div>
                  								<div class="panel-body" style="display: none;">
                  									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                  								</div>
                  							</div>
                              </div>
                              <div class="col-sm-2">
                                <div class="panel panel3">
                  								<div class="panel-heading">
                  									<h3 class="panel-title btn-toggle-collapse">Panel Default</h3>
                  									<div class="right">
                  										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up lnr-chevron-down"></i></button>

                  									</div>
                  								</div>
                  								<div class="panel-body" style="display: none;">
                  									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                  								</div>
                  							</div>
                              </div>
                              <div class="col-sm-2">
                                <div class="panel panel3">
                  								<div class="panel-heading">
                  									<h3 class="panel-title btn-toggle-collapse">Panel Default</h3>
                  									<div class="right">
                  										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up lnr-chevron-down"></i></button>

                  									</div>
                  								</div>
                  								<div class="panel-body" style="display: none;">
                  									<p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                  								</div>
                  							</div>
                              </div>


                            </div>

            							<!-- END PANEL DEFAULT -->
            						</div>

            							<!-- END PANEL WITH FOOTER -->
            						</div>
                        <div class="row colom2">
                                    <div class="col-sm-12">
                                        <div class="row">
                                          <div class="col-sm-2">

                                          </div>
                                          <div class="col-sm-2">
                                            <div class="panel panel3">
                                              <div class="panel-heading">
                                                <h3 class="panel-title btn-toggle-collapse">Panel Default</h3>
                                                <div class="right">
                                                  <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up lnr-chevron-down"></i></button>

                                                </div>
                                              </div>
                                              <div class="panel-body" style="display: none;">
                                                <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-2">
                                            <div class="panel panel3">
                                              <div class="panel-heading">
                                                <h3 class="panel-title btn-toggle-collapse">Panel Default</h3>
                                                <div class="right">
                                                  <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up lnr-chevron-down"></i></button>

                                                </div>
                                              </div>
                                              <div class="panel-body" style="display: none;">
                                                <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-2">
                                            <div class="panel panel3">
                                              <div class="panel-heading">
                                                <h3 class="panel-title btn-toggle-collapse">Panel Default</h3>
                                                <div class="right">
                                                  <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up lnr-chevron-down"></i></button>

                                                </div>
                                              </div>
                                              <div class="panel-body" style="display: none;">
                                                <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-2">
                                            <div class="panel panel3">
                                              <div class="panel-heading ">
                                                <h3 class="panel-title btn-toggle-collapse">Panel Default</h3>
                                                <div class="right">
                                                  <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up lnr-chevron-down"></i></button>

                                                </div>
                                              </div>
                                              <div class="panel-body" style="display: none;">
                                                <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                                              </div>
                                            </div>
                                          </div>


                                        </div>

                                      <!-- END PANEL DEFAULT -->
                                    </div>

                                      <!-- END PANEL WITH FOOTER -->
                                    </div>
                                    <div class="row colom2">
                                                <div class="col-sm-12">
                                                    <div class="row">
                                                      <div class="col-sm-2">

                                                      </div>
                                                      <div class="col-sm-2">
                                                        <div class="panel panel3">
                                                          <div class="panel-heading">
                                                            <h3 class="panel-title btn-toggle-collapse">Panel Default</h3>
                                                            <div class="right">
                                                              <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up lnr-chevron-down"></i></button>

                                                            </div>
                                                          </div>
                                                          <div class="panel-body" style="display: none;">
                                                            <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-2">
                                                        <div class="panel panel3">
                                                          <div class="panel-heading">
                                                            <h3 class="panel-title btn-toggle-collapse">Panel Default</h3>
                                                            <div class="right">
                                                              <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up lnr-chevron-down"></i></button>

                                                            </div>
                                                          </div>
                                                          <div class="panel-body" style="display: none;">
                                                            <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-2">
                                                        <div class="panel panel3">
                                                          <div class="panel-heading">
                                                            <h3 class="panel-title btn-toggle-collapse">Panel Default</h3>
                                                            <div class="right">
                                                              <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up lnr-chevron-down"></i></button>

                                                            </div>
                                                          </div>
                                                          <div class="panel-body" style="display: none;">
                                                            <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-2">
                                                        <div class="panel panel3">
                                                          <div class="panel-heading">
                                                            <h3 class="panel-title btn-toggle-collapse">Panel Default</h3>
                                                            <div class="right">
                                                              <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up lnr-chevron-down"></i></button>

                                                            </div>
                                                          </div>
                                                          <div class="panel-body" style="display: none;">
                                                            <p>Objectively network visionary methodologies via best-of-breed users. Phosfluorescently initiate go forward leadership skills before an expanded array of infomediaries. Monotonectally incubate web-enabled communities rather than process-centric.</p>
                                                          </div>
                                                        </div>
                                                      </div>


                                                    </div>

                                                  <!-- END PANEL DEFAULT -->
                                                </div>

                                                  <!-- END PANEL WITH FOOTER -->
                                                </div>


@endsection
