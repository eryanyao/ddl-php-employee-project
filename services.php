<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>Services</title>

  <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/maicons.css">
  <link rel="stylesheet" href="assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/mobster.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<header class="header">
<nav class="nav navbar navbar-expand-lg navbar-dark navbar-floating">
  <div class="container">
    <a class="navbar-brand" href="index.html">
       <img src="assets/img/logo.png" alt="" width="180">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php 
              require("./php/database.php");
              $query = mysqli_query($conn,"SELECT service_id,service_name FROM service");
              while($row = mysqli_fetch_array($query)){
                 echo '<a class="dropdown-item" href="services.php?id='.$row["service_id"].'">'.$row["service_name"].'</a>';
              };
              
            ?>
          </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <div class="ml-auto my-2 my-lg-0">
        <button class="btn btn-primary rounded-pill" style="width:118px;" onclick="window.location = 'register.php'">Register</button>&nbsp;
        <button class="btn btn-primary rounded-pill" style="width:118px;" onclick="window.location = 'login.php'">Login</button>
      </div>
    </div>
  </div>
</nav>
            </header>
<?php require("./php/services.inc.php"); ?>

<div class="bg-light">
  <div class="page-hero-section bg-image hero-mini" style="background-image: url(assets/img/hero_mini.svg);">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">
            <h3 class="mb-4 fw-medium">Services</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-section no-scroll">
  <div class="container">
  <h2 class="text-center wow fadeIn"><?php echo $title; ?></h2><br><br>
    <div class="row align-items-center">
      <div class="col-lg-7 wow fadeIn">
        <div class="img-place">
          <img src="assets/img/company.jpg" alt="company">
        </div>
      </div>
      <div class="col-lg-5 pl-lg-5 wow fadeInUp">
        <h2 class="mb-4">Brief Introduction</h2>
        <p class="mb-4"><?php echo $desc; ?></p>
        
      </div>
    </div>
  </div>
</div>


<div class="page-section no-scroll">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 wow fadeIn">
      <h3 class="mb-4 w3-margin-left"><strong>Features</strong></h3>
      <p class="mb-4"><i class="fa fa-check-square w3-margin-left"></i> &nbsp;&nbsp;<?php echo $line1; ?></p>
      
      <p class="mb-4"><i class="fa fa-check-square w3-margin-left"></i> &nbsp;&nbsp;<?php echo $line2; ?></p>
      
      <p class="mb-4"><i class="fa fa-check-square w3-margin-left"></i> &nbsp;&nbsp;<?php echo $line3; ?><p>
	  <p class="mb-4"><i class="fa fa-check-square w3-margin-left"></i> &nbsp;&nbsp;<?php echo $line4; ?><p>
      <p class="mb-4"><i class="fa fa-check-square w3-margin-left"></i> &nbsp;&nbsp;<?php echo $line5; ?><p>
	  <p class="mb-4"><i class="fa fa-check-square w3-margin-left"></i> &nbsp;&nbsp;<?php echo $line6; ?><p>

      </div>
      <div class="col-lg-5 pl-lg-4 wow fadeInUp">
        <div class="img-place">
          <img src="assets/img/hands.jpg" alt="hands">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-section no-scroll">
  <div class="container">
  <h1 class="text-center wow fadeIn mb-4 fw-normal">Interested in our services?</h1>
      <h3 class="text-center wow fadeIn">Sign up and get more details</h3><br>
      <button class="btn btn-primary rounded-pill" style="width:118px;display:block;margin:0px auto;" onclick="window.location = 'register.html'">Register</button>
      
  </div>
</div>

<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/assets/php/"; include($IPATH."footer.php");
?>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="assets/vendor/wow/wow.min.js"></script>
<script src="assets/js/mobster.js"></script>
<script src="assets/js/scroll.js"></script>
</body>
</html>
