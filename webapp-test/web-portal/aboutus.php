<?php
  session_start();

  if ($_SESSION['signedIn'] != 'state_signed') {
    header('Location: http://geovm-mundus-web.uni-muenster.de/webapp-test/web-portal/signin');
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
            <a class="nav-link" href="index">
              <span data-feather="home"></span>
              Home
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
            <a class="nav-link active" href="aboutus">
              <span data-feather="users"></span>
              About Us <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">About Us</h1>
      </div>
      <div id="background-container" class="jumbotron">
    <h3>Project Management</h3>
    <p class="lead">The main task of the project management team was to coordinate all teams together and act as a communication bridge between the teams. They also continuously monitored the progress of each group and supported the teams in achieving their goals part-time. In addition, they worked on the creation of guidelines and presentation slides. To manage the project smoothly, they used various utilities such as: Trello and Google Sheets for task management; Discord, Zoom and Whatsapp for communication; Sciebo and Google Drive for the repository.
</p>
    <a class="btn btn-lg btn-primary" href="mailto:jparajul@uni-muenster.de" role="button">Contact Project Management Team &raquo;</a>
  </div>
        <div id="background-container" class="jumbotron">
    <h3>Image Analysis</h3>
    <p class="lead">Image Analysis group had to develop the  products: Orthomosaic, Change Detection and Habitat Map.
</p>
    <a class="btn btn-lg btn-primary" href="mailto:rragagon@uni-muenster.de" role="button">Contact Image Analysis Team &raquo;</a>
  </div>
        <div id="background-container" class="jumbotron">
    <h3>Automated Workflow</h3>
    <p class="lead">Products developed by Automated Workflow group are: Orthophoto, Land Cover Map, Docker in GRASS code for classification and Docker in GRASS code for NDVI.
</p>
    <a class="btn btn-lg btn-primary" href="mailto:gmolisse@uni-muenster.de" role="button">Contact Automated Workflow Team &raquo;</a>
  </div>
        <div id="background-container" class="jumbotron">
    <h3>3D Data Group</h3>
    <p class="lead">Products developed by 3D data group are: Orthophoto, Digital Surface Model (DSM), Digital Terrain Model (DTM), Classified Point Cloud, River line and cross-sections geometries, River width cross-section graphs, River morphology change cross-section graphs, Erosion/Deposition rasters and 3D fly-through animation
</p>
    <a class="btn btn-lg btn-primary" href="mailto:s_koel08@uni-muenster.de" role="button">Contact 3D Data Group &raquo;</a>
  </div>
        <div id="background-container" class="jumbotron">
    <h3>ESRI Cloud</h3>
    <p class="lead">Tasks covered by Esri Cloud team are: Procedure for WAB, Data visualization from 3D Data group and visualization of some other products.
</p>
    <a class="btn btn-lg btn-primary" href="mailto:cigwe@uni-muenster.de" role="button">Contact ESRI Cloud Team &raquo;</a>
  </div>
        <div id="background-container" class="jumbotron">
    <h3>Web Portal</h3>
    <p class="lead">Team of web portal developed this web page whose main purpose is to visualize products of other team members interactively and which can be accessed online by others. For building the webpage are used: Geoserver, Leaflet and PostgreSQL. Server was setup in cooperation with the ifgi server team.
</p>
    <a class="btn btn-lg btn-primary" href="mailto:s_soma01@uni-muenster.de" role="button">Contact Web Portal Team &raquo;</a>
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
