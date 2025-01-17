<?php 
      require('./php/about.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>About Us</title>
  <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/maicons.css">
  <link rel="stylesheet" href="assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/mobster.css">

</head>
<body>

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark navbar-floating">
  <div class="container">
    <a class="navbar-brand" href="index.php">
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
        <li class="nav-item active">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
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
        <li class="nav-item">
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

<main class="bg-light">

<div class="page-hero-section bg-image hero-mini" style="background-image: url(assets/img/hero_mini.svg);">
  <div class="hero-caption">
    <div class="container fg-white h-100">
      <div class="row justify-content-center align-items-center text-center h-100">
        <div class="col-lg-6">
          <h3 class="mb-4 fw-medium">About Us</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-section pt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card-page">
          <h5 class="fg-primary">Stories</h5>
          <hr>
          <p><?php echo $story1; ?></p>
          <p><?php echo $story2; ?></p>
          <p><?php echo $story3; ?></p>
        </div>

        <div class="card-page mt-3">
          <h5 class="fg-primary">Videos</h5>
          <hr>
          <p><?php echo $desc; ?></p>
        
          <!-- Video -->
          <div class="text-center py-5">
          <iframe width="560" height="315" src="<?php echo $url; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

          
        </div>
        
        <div class="card-page mt-3">
          <h5 class="fg-primary">Meet Our Teams</h5>
          <hr>

          <div class="row justify-content-center">
            <div class="col-lg-3 py-3">
              <div class="team-item">
                <div class="team-avatar">
                  <img src="assets/img/person/person_1.png" alt="">
                </div>
                <h5 class="team-name"> Kuan Wei Ming</h5>
                <span class="fg-gray fs-small"> Director</span>
              </div>
            </div>
            <div class="col-lg-3 py-3">
              <div class="team-item">
                <div class="team-avatar">
                  <img src="assets/img/person/person_2.png" alt="">
                </div>
                <h5 class="team-name">John Doe</h5>
                <span class="fg-gray fs-small"> Assistent Director</span>
              </div>
            </div>
            <div class="col-lg-3 py-3">
              <div class="team-item">
                <div class="team-avatar">
                  <img src="assets/img/person/person_3.png" alt="">
                </div>
                <h5 class="team-name">Ellysa</h5>
                <span class="fg-gray fs-small">Accountant</span>
              </div>
            </div>
          </div>
        </div>
        <div class="card-page mt-3">
          <h5 class="fg-primary">Partners</h5>
          <hr>

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 justify-content-center align-items-center mt-5">
            <div class="p-3">
              <div class="img-place client-img">
                <img src="assets/img/clients/alter_sport.png" alt="">
              </div>
            </div>
            <div class="p-3">
              <div class="img-place client-img">
                <img src="assets/img/clients/cleaning_service.png" alt="">
              </div>
            </div>
            <div class="p-3">
              <div class="img-place client-img">
                <img src="assets/img/clients/creative_photo.png" alt="">
              </div>
            </div>
            <div class="p-3">
              <div class="img-place client-img">
                <img src="assets/img/clients/global_tv.png" alt="">
              </div>
            </div>
            <div class="p-3">
              <div class="img-place client-img">
                <img src="assets/img/clients/net_sport_tv.png" alt="">
              </div>
            </div>
            <div class="p-3">
              <div class="img-place client-img">
                <img src="assets/img/clients/news_digital_tv.png" alt="">
              </div>
            </div>
            <div class="p-3">
              <div class="img-place client-img">
                <img src="assets/img/clients/spa_beauty.png" alt="">
              </div>
            </div>
            <div class="p-3">
              <div class="img-place client-img">
                <img src="assets/img/clients/trivier_group.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</main> <!-- .bg-light -->


<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/assets/php/"; include($IPATH."footer.php");
?>

</div>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="assets/vendor/wow/wow.min.js"></script>
<script src="assets/js/mobster.js"></script>
<script src="assets/js/scroll.js"></script>
</body>
</html>
