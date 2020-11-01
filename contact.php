<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>Contact Us</title>

  <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/maicons.css">
  <link rel="stylesheet" href="assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/mobster.css">
  

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
  <div class="container">
    <a class="navbar-brand" href="index.html">
       <img src="assets/img/logo.jpg" alt="" width="180">
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="index.html">Accounting</a>
            <a class="dropdown-item" href="index-2.html">Company Secretarial</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <div class="ml-auto my-2 my-lg-0">
        <button class="btn btn-primary rounded-pill" style="width:118px;" onclick="window.location = 'register.html'">Register</button>&nbsp;
        <button class="btn btn-primary rounded-pill" style="width:118px;" onclick="window.location = 'login.html'">Login</button>
      </div>
    </div>
  </div>
</nav>

<div class="bg-light">

  <div class="page-hero-section bg-image hero-mini" style="background-image: url(assets/img/hero_mini.svg);">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">
            <h3 class="mb-4 fw-medium">Contact Us</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section pt-1">
    <div class="container">
      <div class="row justify-content-center">

      <!--alert messages start-->
      <?php include 'sendemail.php'; ?>
        
        <!--alert messages end-->
       <div class="col-md-6 col-lg-10 my-3 wow fadeInUp mt-5">
       <h3 class="text-center wow fadeIn" id="contact">Contact us now</h3>
         <div class="card-page justify-content-center mt-5">
         <div class="form-group">
               
             </div>
         
           <form method="POST" class="mt-3" action="contact.php">
             <div class="form-group">
               <label for="name" class="fw-medium fg-grey">Fullname</label>
               <input class="form-control" type="text" name="name" placeholder="Your Name" required>
             </div>
   
             <div class="form-group">
               <label for="email" class="fw-medium fg-grey">Email</label>
               <input class="form-control" type="email" name="email" placeholder="Your Email" required >
             </div>

             <div class="form-group">
               <label for="message" class="fw-medium fg-grey">Message</label>
               <textarea rows="6" class="form-control" name="message" placeholder="Your Message" required></textarea>
             </div>

             <p>*Your information will never be shared with any third party.</p>
   
             <div class="form-group mt-4">
               <button type="submit" class="btn btn-primary send-btn" type="submit" name="submit" value="Send">Send Message</button>
             </div>
             <form method="POST" class="mt-3">
             
           </form>
         </div>
       </div>
       <?php 
       require('./php/contact.php');
       ?>
      <div class="col-md-6 col-lg-10 my-3 wow fadeInUp mt-5">
        <h3 class="text-center wow fadeIn">Get in touch</h3>
        <p class="text-center mt-5">Ask us about anything on company registration or company secretarial services in Malaysia.</p>
          
        </div>
          
        <div class="col-lg-10 my-3 wow fadeInUp">
          <div class="card-page">
            <div class="row row-beam-md">
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-location-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Location</p>
                <p class="mb-0"><?php echo $location; ?></p>
              </div>
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-call-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Contact</p>
                <p class="mb-1"><?php echo $phone; ?></p>
                
              </div>
              <div class="col-md-4 text-center py-3 py-md-2">
                <i class="mai-mail-open-outline h3"></i>
                <p class="fg-primary fw-medium fs-vlarge">Email</p>
                <p class="mb-1"><?php echo $email; ?></p>
                
              </div>
            </div>
          </div>
        </div>
        

        <div class="col-md-6 col-lg-7 my-3 wow fadeInUp mt-5">
        <h3 class="text-center wow fadeIn">Location</h3>
          <div class="card-page justify-content-center mt-5">
            <div class="maps-container">
              <div id="myMap"></div>
            </div>
          </div>
        </div>
      
        
        
      </div>
    </div>
  </div>
  



<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/assets/php/"; include($IPATH."footer.html");
?>

<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
</script>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="assets/vendor/wow/wow.min.js"></script>
<script src="assets/js/mobster.js"></script>
<script src="assets/js/google-maps.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>
</html>