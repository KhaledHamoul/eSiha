@extends('layouts.app')

@section('content')
  <body class="fix-header fix-sidebar">
      <!-- Preloader - style you can find in spinners.css -->
      <div class="preloader">
          <svg class="circular" viewBox="25 25 50 50">
  			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
      </div>
      <!-- Main wrapper  -->
      <div id="main-wrapper">

          <div class="unix-login">
              <div class="container-fluid">
                  <div class="row justify-content-center">
                      <div class="col-lg-4">
                          <div class="login-content card">
                              <div class="login-form">
                                  <h4>Connecter</h4>
                                  <form>
                                      <div class="form-group">
                                          <label>Adresse Email</label>
                                          <input type="email" class="form-control" placeholder="Ex : ossama12batouche@gmail.com">
                                      </div>
                                      <div class="form-group">
                                          <label>Mot de passe</label>
                                          <input type="password" class="form-control" placeholder=" * * * * * * ">
                                      </div>
                                      <div class="checkbox">
                                          <label>
          										<input type="checkbox"> Souvien de moi
          									</label>
                                          <label class="pull-right">
          										<a href="#">Mot de passe oublié ?</a>
          									</label>

                                      </div>
                                      <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Connecter</button>
                                      <div class="register-link m-t-15 text-center">
                                          <p>Ne pas avoir de compte ? <a href="#"> Inscrivez-vous ici</a></p>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
      <!-- End Wrapper -->
      <!-- All Jquery -->
      <script src="js/lib/jquery/jquery.min.js"></script>
      <!-- Bootstrap tether Core JavaScript -->
      <script src="js/lib/bootstrap/js/popper.min.js"></script>
      <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
      <!-- slimscrollbar scrollbar JavaScript -->
      <script src="js/jquery.slimscroll.js"></script>
      <!--Menu sidebar -->
      <script src="js/sidebarmenu.js"></script>
      <!--stickey kit -->
      <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
      <!--Custom JavaScript -->
      <script src="js/custom.min.js"></script>

@endsection
