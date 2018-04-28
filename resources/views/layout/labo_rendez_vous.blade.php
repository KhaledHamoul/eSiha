
@include('layout.header')
@include('layout.top')

@include('layout.aside_menu_labo')

  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Rendez-vous</h3> </div>
              
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
            <div class="row">
					
						<div class="col-lg-12">
							<div class="card">
								<div class="card-title">
									<h2>En attente </h2>
									<br>
								</div>
								<div id="nonlu" class="recent-comment">

								</div>

								<br><br>
                                    <div class="card-title">
									   <h2>Pris en charge </h2>
									   <br>


								<div id="lu" class="recent-comment">
									
								</div>
									
								</div>
							</div>
							<!-- /# card -->
						</div>
						<!-- /# column -->
					


					

				 

                </div>
            </div>
            <!-- End Container fluid  -->
         
        </div>
@include('layout.modals.consulter_rendez_vous')		
        <!-- End Page wrapper  -->
@include('layout.footer')

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  

