
  <!-- Preloader - style you can find in spinners.css -->
  <div class="preloader">
      <svg class="circular" viewBox="25 25 50 50">
    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
  </div>
  <!-- Main wrapper  -->
  <div id="main-wrapper">
      <!-- header header  -->
      <div class="header">
          <nav class="navbar top-navbar navbar-expand-md navbar-light">
              <!-- Logo -->
              <div class="navbar-header">
                  <a class="navbar-brand" href="index.html">
                      <!-- Logo icon -->
                      <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
                      <!--End Logo icon -->
                      <!-- Logo text -->
                      <span><b>E-Si7A</b></span>
                  </a>
              </div>
              <!-- End Logo -->
              <div class="navbar-collapse">
                  <!-- toggle and nav items -->
                  <ul class="navbar-nav mr-auto mt-md-0">
                      <!-- This is  -->
                      <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                      <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>

                  </ul>
                  <!-- User profile and search -->
                  <ul class="navbar-nav my-lg-0">


<body class="fix-header fix-sidebar">

                      <!-- Search -->
                      <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                          <form class="app-search">
                              <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                      </li>
                      <!-- Comment -->
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>

                          <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                              <ul>
                                  <li>
                                      <div class="drop-title">Notifications</div>
                                  </li>
                                  <li>
                                      <div class="message-center">
                                          <!-- Message -->
                                          <a href="#">
                                              <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                              <div class="mail-contnet">
                                                  <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                              </div>
                                          </a>
                                          <!-- Message -->
                                          <a href="#">
                                              <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                              <div class="mail-contnet">
                                                  <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                              </div>
                                          </a>
                                          <!-- Message -->
                                          <a href="#">
                                              <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                              <div class="mail-contnet">
                                                  <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                              </div>
                                          </a>
                                          <!-- Message -->
                                          <a href="#">
                                              <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                              <div class="mail-contnet">
                                                  <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                              </div>
                                          </a>
                                      </div>
                                  </li>
                                  <li>
                                      <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <!-- End Comment -->
                      <!-- Messages -->
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                              <ul>
                                  <li>
                                      <div class="drop-title">Demande en urgence</div>
                                  </li>
                                  <li>
                                      <div class="message-center" id="listUrgences">
                                          <!-- Message -->

                                      </div>
                                  </li>
                                  <li>
                                      <a class="nav-link text-center" href="javascript:void(0);"> <strong>Liste de toutes les Demandes</strong> <i class="fa fa-angle-right"></i> </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <!-- End Messages -->
                      <!-- Profile -->
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                          <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                              <ul class="dropdown-user">
                                  <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                  <li><a href="#"><i class="ti-email"></i> Boite de reception</a></li>
                                  <li><a href="#"><i class="ti-settings"></i> Configurations</a></li>
                                  <li><a href="login"><i class="fa fa-power-off"></i> Deconnecter</a></li>
                              </ul>
                          </div>
                      </li>
                  </ul>
              </div>
          </nav>
      </div>
      <!-- End header header -->
      @include('layout.modals.urganceDetails')



<script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
<script type="text/javascript">
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyC78J7i4sucV9i5H0xMSusf8jYBDbF1JgI",
      authDomain: "esiha-5e928.firebaseapp.com",
      databaseURL: "https://esiha-5e928.firebaseio.com",
      projectId: "esiha-5e928",
      storageBucket: "esiha-5e928.appspot.com",
      messagingSenderId: "1033888860300"
    };
    firebase.initializeApp(config);

    // Get a reference to the database service
    var database = firebase.database();

    var listMessages = $('#listUrgences');

    var ref = database.ref('Urgences');

    ref.on('value', function(snapshot) {
        var a = "";

          snapshot.forEach(function(childSnapshot) {

           var child = childSnapshot.val();
           a += `<a href="#">
                       <div class="user-img"> <img src="images/users/5.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                       <div class="mail-contnet" onClick="UrgenceView('`+child.user+`','`+child.date+`','`+child.heur+`','`+child.cas+`',`+child.degre+`)" data-toggle="modal" data-target="#urgenceDetails">
                           <h5>`+child.user+`</h5> <span class="mail-desc">`+child.cas+`</span> <span class="time">`+child.heur+`</span>
                       </div>
                   </a>`;
          });
          listMessages.html(a);
    });

</script>
