<?php
  session_start();

  $user = $_POST['userName'];
  $pass = $_POST['password'];

  if ((($user != 'uas2020') || ($pass != 'CoronaIntervenedLife2020')) && ($_SESSION['signedIn'] != 'state_signed')) {
    header('Location: http://geovm-mundus-web.uni-muenster.de/webapp-test/web-portal/signin');
  }
  else {
    $_SESSION['signedIn'] = 'state_signed';
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Eftychia, Mirjeta and Sulaxan">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Web Portal - Unmanned Aerial Systems</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
	#background {
          background: url("ian-usher-JPAfSd_acI8-unsplash.jpg") no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
        .flex-equal > * {
  -ms-flex: 1;
  flex: 1;
}
@media (min-width: 768px) {
  .flex-md-equal > * {
    -ms-flex: 1;
    flex: 1;
  }
}
        .bg-dark-before{
    background-image: url('before.png');
            background-size: 100%;
}
        .bg-light-after{
    background-image: url('after.png');
            background-size: 100%;
}
        .overflow-hidden { overflow: hidden; }
        
    </style>
    <!-- Custom styles for this template -->
    <link href="index.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3">Web Portal</a>
  <a class="navbar-brand-two mr-0 px-3" style="color:white">Unmanned Aerial Systems for applied research - Westfälische Wilhelms-Universität Münster</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
        <a class="btn btn-primary" href="signin.php?action=signOut" >Sign out</a>    
    </li>
  </ul>
</nav>

<div id="background" class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
      <div class="sidebar-sticky pt-3" style="color:white">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="index">
              <span data-feather="home"></span>
              Home <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orthomosaic">
              <span data-feather="layers"></span>
              Orthophoto
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="landcover">
              <span data-feather="map"></span>
              Land Cover Map
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="erosionraster">
              <span data-feather="grid"></span>
              Erosion Raster
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus">
              <span data-feather="users"></span>
              About Us
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div id="background-container" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
  <div>
    <h1 class="display-4 font-weight-normal">Welcome to our web-portal!</h1>
    <p class="lead font-weight-normal">This web-portal was developed in the study project “Unmanned aerial systems for applied research” in the summer term 2020 at the University of Muenster in Germany. The general aim of this study project is to monitor the conservation process of the renaturated river Aa in the south of Muenster in Germany.</p>
    <a class="btn btn-outline-light" href="aboutus">You want to know more about us?</a>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3" style="height: 450px">
  <div class="bg-dark-before mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Before</h2>
    </div>
  </div>
  <div class="bg-light-after mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">After</h2>
    </div>
  </div>
</div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="index.js"></script></body>
</html>
