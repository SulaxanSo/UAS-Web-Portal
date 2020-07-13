<?php
  session_start();

  if ($_GET['action'] == 'signOut') {
    $_SESSION['signedIn'] = 'state_unsigned';
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
        body {
          background: url("ian-usher-JPAfSd_acI8-unsplash.jpg") no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }
        .text-center form{
          position: relative;
          top: 50%;
          -webkit-transform: translateY(50%);
          -ms-transform: translateY(50%);
          transform: translateY(50%);
        }
        .form-signin {
            background: rgba(0, 0, 0, .25);
          width: 100%;
          max-width: 330px;
          padding: 15px;

          margin: auto;
        }
        .form-signin .form-control {
          position: relative;
          box-sizing: border-box;
          height: auto;
          padding: 10px;
          font-size: 16px;
        }
        .form-signin .form-control:focus {
          z-index: 2;
        }
        .form-signin input[type="username"] {
          margin-bottom: -1px;
          border-bottom-right-radius: 0;
          border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
          margin-bottom: 10px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }
        h1{
            color: white;
        }
        p{
            color: white;
        }    
</style>
    <!-- Custom styles for this template -->
    <link href="index.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3">Web Portal</a>
        <a class="navbar-brand-two mr-0 px-3" style="color:white">Unmanned Aerial Systems for applied research - Westfälische Wilhelms-Universität Münster</a>
    </nav>
    <div class="text-center form">
        <form class="form-signin" action="index.php" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
          <label for="inputUsername" class="sr-only">Username</label>
          <input type="username" id="inputUsername" name="userName" class="form-control" placeholder="Username" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
          <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="getInfo()">Sign in</button>
          <p class="mt-5 mb-3">&copy; Team Web-Portal 2020</p>
        </form>
      </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
        <script src="../assets/dist/js/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="index.js"></script>
        <script src="signin.js"></script>
    </body>
</html>
