<?php $__env->startSection('content'); ?>

  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Messages</h3> </div>

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
                <div class="recent-comment">
                  <div class="media">
                    <div class="media-left">
                      <a href="#"><img alt="..." src="images/avatar/1.jpg" class="media-object"></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">HAMOUL Khaled</h4>
                      <p>Je veux faire un radio sur le dos. </p>
                      <p class="comment-date">October 21, 2018</p>
                                            <button type="button" class="pull-right btn btn-dark btn-outline btn-rounded m-b-10 m-l-5">Consulter</button>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="#"><img alt="..." src="" class="media-object"></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">BATOUCHE Oussama</h4>
                      <p>Je veux prendre un rendez-vous pour un bilan general. </p>
                      <p class="comment-date">October 18, 2018</p>
                                            <button type="button" class="pull-right btn btn-dark btn-outline btn-rounded m-b-10 m-l-5">Consulter</button>
                    </div>
                  </div>

                                    <br><br>
                                    <div class="card-title">
                     <h2>Pris en charge </h2>
                     <br>
                    </div>

                  <div class="media">
                    <div class="media-left">
                      <a href="#"><img alt="..." src="images/avatar/1.jpg" class="media-object"></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">OUMELLAL Abdessalam</h4>
                      <p>Prise de rendez-vous pour un radio . </p>
                      <p class="comment-date">October 05, 2018</p>
                                            <button type="button" class="pull-right btn btn-dark btn-outline btn-rounded m-b-10 m-l-5">Consulter</button>
                    </div>
                  </div>
                                    <div class="media">
                    <div class="media-left">
                      <a href="#"><img alt="..." src="images/avatar/1.jpg" class="media-object"></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">KERFAH Issam</h4>
                      <p>Prise de rendez-vous pour un radio . </p>
                      <p class="comment-date">Septembre 14, 2018</p>
                                            <button type="button" class="pull-right btn btn-dark btn-outline btn-rounded m-b-10 m-l-5">Consulter</button>
                    </div>
                  </div>
                                    <div class="media no-border">
                    <div class="media-left">
                      <a href="#"><img alt="..." src="images/avatar/1.jpg" class="media-object"></a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">GUERRAS Mohamed Amine</h4>
                      <p>Prise de rendez-vous pour un radio sur le pied  . </p>
                      <p class="comment-date">Septembre 10, 2018</p>
                                            <button type="button" class="pull-right btn btn-dark btn-outline btn-rounded m-b-10 m-l-5">Consulter</button>

                    </div>
                  </div>


                </div>
              </div>
              <!-- /# card -->
            </div>
            <!-- /# column -->$
                </div>
            </div>
            <!-- End Container fluid  -->

        </div>
        <!-- End Page wrapper  -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('medecinHome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>