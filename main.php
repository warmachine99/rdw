<?php
// start session so that errors can be available in this file to print
session_start();

?>

<!doctype php>
<php lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="WebTecher">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>ROADWORTHY&reg; Official Site</title>
    

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    
    <!-- Custom styles for this template -->
    <link href="CustomStyling/carousel.css" rel="stylesheet">  
    


    <style>
      
    </style>

  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="main.php">ROADWORTHY</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="main.php">Home</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="regveh.php">Vehicle</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="driverprof.php">License</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">contact</a>
          </li>
         
        </ul>

       
          <ul class="nav navbar-nav navbar-right">
           <li> <a href="logout.php" class="btn btn-outline-success">LOG OUT</a></li>
          </ul>
      
        
       
      </div>
    </div>
  </nav>
</header>

<main>

  <!---->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
          <div class="carousel-item active">
              <img class="d-block w-100" src="images/c4.jpeg" alt="First slide" style="object-fit: contain;">
              <div class="carousel-caption text-start d-none d-md-block">
                  <p>Register Now</p>
                  <p><a class="btn btn-lg btn-primary border-white bg-white text-black" href="registerv.php">Register</a></p>
              </div>
          </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>
  <!---->

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">


    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Register your car with us  <span class="text-muted">Be safe</span></h2>
        <p class="lead">Overspeeding Kills safe a life, Go the speed limit.</p>
      </div>
      <div class="col-md-5">
        <img src="images/dnd.jpg" class="featurette-image img-fluid mx-auto" alt="dnd" width="500" height="500" preserveAspectRatio="xMidYMid slice" focusable="false">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Create your License <span class="text-muted">Drive Safe</span></h2>
        <p class="lead">Drive with creditation</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="images/reg.jpeg" class="featurette-image img-fluid mx-auto" alt="shoes" width="500" height="500" preserveAspectRatio="xMidYMid slice" focusable="false">

      </div>
    </div>

    <hr class="featurette-divider">

    

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2021 Roadworthy, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


      
  </body>
</php>

