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
      
  <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
  <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
      <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />
      
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
        
        #map{height: 500px;}
        
        [type="file"] {
          height: 0;
          overflow: hidden;
          width: 0;
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
            <a class="nav-link active" href="orthomosaic">
              <span data-feather="layers"></span>
              Orthomosaic <span class="sr-only">(current)</span>
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
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Orthomosaic</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" onclick="exportRaster()" class="btn btn-sm btn-outline-light">Export</button>
          </div>
        </div>
        <div>
            <input type='file' id="file" onchange='loadFile(event)'>
            <label for="file" class="btn btn-sm btn-outline-light"> 
                <span data-feather="file"></span> 
                Upload GeoJSON to Map
            </label>
        </div>
      </div>

      <p id="map"></p>
        <div id="background-container" class="jumbotron">
    <h3>More on Orthomosaics</h3>
    <p class="lead">The orthomosaic is generated from a number of raw aerial photographs that are stitched together using appropriate geolocated images in Pix4D. The resulting image feature detailed ground surface with high spatial resolution. Preprocessing stage was carried out for 2020 RGB and Multispectral datasets that rendered products like orthomosaic, point clouds and DSM which were utilized for further analysis.
</p>
  </div>
    </main>
  </div>
</div>
<script>
  function exportRaster() {
    window.open("http://10.6.1.10:8080/geoserver/uas2020_workspace/wcs?service=WCS&version=1.0.0&request=GetCoverage&layers=uas2020_workspace%3AUAS2020_Multispectral_transparent_mosaic_group1&bbox=401793.96284000005%2C5755754.5486200005%2C401992.67564000003%2C5755968.106380001&width=714&height=768&format=geotiff&coverage=uas2020_workspace%3AUAS2020_Multispectral_transparent_mosaic_group1&crs=EPSG%3A32632");
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="index.js"></script>
        <script src="map.js"></script>
        <script src="orthomosaic.js"></script>

    </body>
    
        
</html>
