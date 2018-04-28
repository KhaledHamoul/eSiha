
<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('layout.aside_menu_labo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
<?php echo $__env->make('layout.modals.consulter_rendez_vous', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>		
        <!-- End Page wrapper  -->
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  

