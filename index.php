<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>DDL Associate Sdn Bhd</title>
  <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/maicons.css">
  <link rel="stylesheet" href="assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/mobster.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  
</head>
<body>

<header>
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark navbar-floating">
  <div class="container">
    <a id="logo" class="navbar-brand" href="#">
      <img src="assets/img/logo.png" alt="" width="180">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
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
</header>

<div class="page-hero-section bg-image hero-home-2" style="background-image: url(assets/img/bg_hero_2.svg);">
  <div class="hero-caption">
    <div class="container fg-white h-100">
      <div class="row align-items-center h-100">
        <div class="col-lg-6 wow fadeInUp">
          <div class="badge badge-soft mb-2"># Online Company Secretary</div>
          <h1 class="mb-4 fw-normal">DDL Associates Sdn Bhd</h1>
         
    <span class="w3-xlarge w3-hide-small">Want to start a company<br>But don't know how to? </span>
    <span class="w3-small" ><br>Do not hesitate and let us help you create one</span><br>

          <a href="register.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Get Started</a>

        </div>
        <div class="col-lg-6 d-lg-none d-lg-block wow zoomIn">
          <div class="img-place mobile-preview shadow floating-animate" style="max-width: 500px;" >
            <img src="assets/img/secretary.png" alt="">
          </div>          
        </div>
      </div>
    </div>
  </div>
</div>


<div class="page-section no-scroll">
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64" id="services" >
  <div class="w3-quarter">
    <span class="w3-xxxlarge" style="position:relative;right:-140%;">Our Services </span>
  </div>
</div>
  <div class="container">
    

    <div class="row justify-content-center mt-5">
      <div class="col-lg-10">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 py-3 wow fadeInLeft">
            <div class="card card-body border-0 text-center shadow pt-5">
              <div class="svg-icon mx-auto mb-4 ">
                <img src="assets/img/icons/case.jpg" alt="">
              </div>
              <h5 class="fg-gray">Company / Business Details</h5>
              <p class="fs-small">Provides a summary about your company / business profile including SSM info, trade preferences, etc.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
            <div class="card card-body border-0 text-center shadow pt-5">
              <div class="svg-icon mx-auto mb-4 ">
                <img src="assets/img/icons/people.jpg" alt="">
              </div>
              <h5 class="fg-gray">Owners Details</h5>
              <p class="fs-small">Contains owner's personal information. Applicable only for Malaysia Business Profile report.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 py-3 wow fadeInRight">
            <div class="card card-body border-0 text-center shadow pt-5">
              <div class="svg-icon mx-auto mb-4">
                <img src="assets/img/icons/building.jpg" alt="">
              </div>
              <h5 class="fg-gray">Related Companies</h5>
              <p class="fs-small">Shows the owner's current & previous companies.</p>
            </div>
          </div>
		  <div class="col-md-6 col-lg-4 py-3 wow fadeInLeft">
            <div class="card card-body border-0 text-center shadow pt-5">
              <div class="svg-icon mx-auto mb-4">
                <img src="assets/img/icons/piechart.jpg" alt="">
              </div>
              <h5 class="fg-gray">Summary of Share Capital</h5>
              <p class="fs-small">An overview of your company's capital structure</p>
            </div>
          </div>
		  <div class="col-md-6 col-lg-4 py-3 wow fadeInUp ">
            <div class="card card-body border-0 text-center shadow pt-5">
              <div class="svg-icon mx-auto mb-4">
                <img src="assets/img/icons/shareholder.jpg" alt="">
              </div>
              <h5 class="fg-gray">Directors and Shareholders</h5>
              <p class="fs-small">Personal details of board members and shareholders</p>
            </div>
          </div>
		  <div class="col-md-6 col-lg-4 py-3 wow fadeInRight ">
            <div class="card card-body border-0 text-center shadow pt-5">
              <div class="svg-icon mx-auto mb-4">
                <img src="assets/img/icons/card.jpg" alt="">
              </div>
              <h5 class="fg-gray">Charge Details</h5>
              <p class="fs-small">Interests obtained via property of the company as security for repayment</p>
            </div>
          </div>
		  <div class="col-md-6 col-lg-4 py-3 wow fadeInLeft ">
            <div class="card card-body border-0 text-center shadow pt-5">
              <div class="svg-icon mx-auto mb-4">
                <img src="assets/img/icons/sheet.jpg" alt="">
              </div>
              <h5 class="fg-gray">Balance Sheet</h5>
              <p class="fs-small">A 5-year look into assets, liabilities, equity & other financial items</p>
            </div>
          </div>
		  <div class="col-md-6 col-lg-4 py-3 wow fadeInUp ">
            <div class="card card-body border-0 text-center shadow pt-5">
              <div class="svg-icon mx-auto mb-4">
                <img src="assets/img/icons/profit.jpg" alt="">
              </div>
              <h5 class="fg-gray">Profit & Loss</h5>
              <p class="fs-small">Profits and dividends over the past 5 years</p>
            </div>
          </div>
		  <div class="col-md-6 col-lg-4 py-3 wow fadeInRight">
            <div class="card card-body border-0 text-center shadow pt-5">
              <div class="svg-icon mx-auto mb-4">
                <img src="assets/img/icons/money.jpg" alt="">
              </div>
              <h5 class="fg-gray">Key Financial Ratios</h5>
              <p class="fs-small">A ratio-based analysis of a company's financial performance</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Testimonials -->
<div class="page-section">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-6 wow fadeIn">
        <h2>Our Past Clients Reviews </h2>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="owl-carousel stack-carousel mt-5 wow fadeInUp">
      <div class="item">
        <div class="ratings fs-small py-3">
          <span class="icon mai-star"></span>
          <span class="icon mai-star"></span>
          <span class="icon mai-star"></span>
          <span class="icon mai-star"></span>
          <span class="icon mai-star-half"></span>
        </div>
  
        <div class="caption">Great Service!! Employees are nice and patient</div>
  
        <div class="avatar mt-3">
          <div class="avatar-img">
            <img src="assets/img/person/person_1.png" alt="">
          </div>
          <div class="avatar-caption">
            <p class="mb-0 fw-medium fg-primary">Galih Raugana</p>
            <div class="fs-vsmall fw-medium">Businessman</div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="ratings fs-small py-3">
          <span class="icon mai-star"></span>
          <span class="icon mai-star"></span>
          <span class="icon mai-star"></span>
          <span class="icon mai-star"></span>
          <span class="icon mai-star-half"></span>
        </div>
  
        <div class="caption">Clear explanation on how to create a company. Recommended</div>
  
        <div class="avatar mt-3">
          <div class="avatar-img">
            <img src="assets/img/person/person_2.png" alt="">
          </div>
          <div class="avatar-caption">
            <p class="mb-0 fw-medium fg-primary">Galih Raugana</p>
            <div class="fs-vsmall fw-medium">Graphic Designer</div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="ratings fs-small py-3">
          <span class="icon mai-star"></span>
          <span class="icon mai-star"></span>
          <span class="icon mai-star"></span>
          <span class="icon mai-star"></span>
          <span class="mai-star"></span>
        </div>
  
        <div class="caption">Employees are helpful with my enquiries</div>
  
        <div class="avatar mt-3">
          <div class="avatar-img">
            <img src="assets/img/person/person_3.png" alt="">
          </div>
          <div class="avatar-caption">
            <p class="mb-0 fw-medium fg-primary">Galih Raugana</p>
            <div class="fs-vsmall fw-medium">Chief Executive Officer Insurance</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- FAQ -->
<div class="page-section bg-light">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-5 py-3 wow fadeInUp">
        <h2 class="mb-4">Frequently <br> asked question</h2>
        <p>General questions on incorporating and running a Sdn Bhd</p>

        <p class="fg-primary fw-medium">Need more helps?</p>
        <a href="contact.php" class="btn btn-gradient btn-split-icon rounded-pill">
          <span class="icon mai-call-outline"></span> Contact Us
        </a>
      </div>
      <div class="col-lg-7 py-3 no-scroll-x">
        <div class="accordion accordion-gap" id="accordionFAQ">
          <div class="accordion-item wow fadeInRight">
            <div class="accordion-trigger" id="headingFour">
              <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">Who can register a Sdn Bhd</button>
            </div>
            <div id="collapse1" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFAQ">
              <div class="accordion-content">
                <p>To register a Sdn Bhd, you need to be at least 18 years old, reside in Malaysia, and are not disqualified under Section 198 of the Companies Act 2016.</p>
                <p> If you are a foreigner who is not residing in Malaysia, you will need to partner with at least 1 director who resides in Malaysia to register your company.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item wow fadeInRight">
            <div class="accordion-trigger" id="headingFive">
              <button class="btn" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">What is a Sdn Bhd?</button>
            </div>
            <div id="collapse2" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionFAQ">
              <div class="accordion-content">
                <p>A Sdn Bhd (Sendirian Berhad) is a private company limited by shares where its shareholder(s)' liability is limited to the amount of shares held. It is a separate legal entity with full capacity to carry on or undertake any business or activity including to sue or be sued, manage property, and carry out transactions.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item wow fadeInRight">
            <div class="accordion-trigger" id="headingSix">
              <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">How many directors are needed to register a Sdn Bhd?</button>
            </div>
            <div id="collapse3" class="collapse" aria-labelledby="headingSix" data-parent="#accordionFAQ">
              <div class="accordion-content">
                <p>Only 1 director, who may also act as the sole shareholder of the company</p>
              </div>
            </div>
          </div>
          <div class="accordion-item wow fadeInRight">
            <div class="accordion-trigger" id="headingSeven">
              <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">What are the roles and duties of a company secretary a company?</button>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionFAQ">
              <div class="accordion-content">
			  <p>Besides assisting you with company registration, a company secretary is also responsible for:</p>
                <ul>
                  <li>Making sure the information of the company, director(s) and shareholder(s) are kept up-to-date.</li>
                  <li>Advising the company on compliance to various laws and regulations such as the Malaysian Companies Act 2016.</li>
                  <li>Lodging annual return and financial statements.</li>
                  <li>Keeping meeting minutes and written resolutions of board meetings.</li>
                  <li>Handling the striking off or winding up of the company.</li>
                  <li>Providing CTC documents for opening a bank account, grant application, etc.</li>
                </ul>
              
              </div>
            </div>
          </div>

          <div class="accordion-item wow fadeInRight">
            <div class="accordion-trigger" id="headingEight">
              <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">How much is the minumum paid-up capital to register a Sdn Bhd?</button>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="headingEight" data-parent="#accordionFAQ">
              <div class="accordion-content">
                <p>The minimum paid-up capital of a Sdn Bhd is RM1. However, we recommend at least RM1,000 in paid-up capital as this will match the minimum required deposit at the bank.</p>

              </div>
            </div>
          </div>

          <div class="accordion-item wow fadeInRight">
            <div class="accordion-trigger" id="headingNine">
              <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">Do I need to appoint a company secratary for my Sdn Bhd</button>
            </div>
            <div id="collapse6" class="collapse" aria-labelledby="headingNine" data-parent="#accordionFAQ">
              <div class="accordion-content">
                <p>According to Section 236 of the Companies Act 2016, all Sdn Bhd must appoint a company secretary within 30 days from its date of incorporation.</p> 
            </div>
          </div>
		  

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Clients -->
<div class="page-section">
  <div class="container">
    <div class="text-center wow fadeIn">
      <h2 class="mb-4">Our partners</h2>
      <p>Become a <a href="#">partners?</a></p>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 justify-content-center align-items-center mt-5">
      <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="assets/img/clients/alter_sport.png" alt="">
        </div>
      </div>
      <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="assets/img/clients/cleaning_service.png" alt="">
        </div>
      </div>
      <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="assets/img/clients/creative_photo.png" alt="">
        </div>
      </div>
      <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="assets/img/clients/global_tv.png" alt="">
        </div>
      </div>
      <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="assets/img/clients/net_sport_tv.png" alt="">
        </div>
      </div>
      <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="assets/img/clients/news_digital_tv.png" alt="">
        </div>
      </div>
      <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="assets/img/clients/spa_beauty.png" alt="">
        </div>
      </div>
      <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="assets/img/clients/trivier_group.png" alt="">
        </div>
      </div>
    </div>
  </div>
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
