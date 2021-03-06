<?php
  session_start();

  if ($_SESSION['signedIn'] != 'state_signed') {
    header('Location: https://geovm-mundus-web.uni-muenster.de/web-portal/signin');
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

    
      
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
      <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="dist/leaflet.zoomhome.css"/>
<script src="dist/leaflet.zoomhome.min.js"></script>
<link rel="stylesheet" href="dist/L.Control.HtmlLegend.css" />
<script src="dist/L.Control.HtmlLegend.js"></script>
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
	
	@font-face {
            font-family: 'icon';
            src: url(data:font/ttf;base64,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);
            font-weight: normal;
            font-style: normal;
        }

	[class^="icon-"], [class*=" icon-"] {
            font-family: 'icon' !important;
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;

            /* Better Font Rendering =========== */
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .icon-eye-slash:before {
            content: "\e903";
        }

        .icon-eye:before {
            content: "\e904";
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
            <a class="nav-link active" href="landcover">
              <span data-feather="map"></span>
              Land Cover Map <span class="sr-only">(current)</span>
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
        <h1 class="h2">Land Cover Map</h1>
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
    <h3>More on Land Cover Map</h3>
    <p class="lead">Land Cover Map by Automated Workflow group is a product resulting from Random Forest classifier and has an accuracy of 0,7808. It was run with docker in GRASS and has five classes: water, roads, trees, agriculture and grass.

</p>
  </div>
    </main>
  </div>
</div>
<script>
  function exportRaster() {
    window.open("https://geovm-mundus-web.uni-muenster.de/geoserver/uas2020_workspace/wcs?service=WCS&version=1.0.0&request=GetCoverage&layers=uas2020_workspace%3ALandCoverMap&bbox=401793.9018%2C5755752.6211%2C401994.6374%2C5755969.2929&width=711&height=768&format=geotiff&coverage=uas2020_workspace%3ALandCoverMap&crs=EPSG%3A32632");
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="index.js"></script>
        <script src="map.js"></script>
        <script src="landcover.js"></script>

    </body>
    
        
</html>
