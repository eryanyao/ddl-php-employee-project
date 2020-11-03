<?php 
session_start();
$uid = $_SESSION['userId'];
$username = $_SESSION['userUId'];
$email = $_SESSION['userEmail'];
?>
<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../assets/js/sweetalert.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  
  <form action="../php/logout.inc.php" method="POST">
  <button type="submit" name="logout-submit" class="w3-bar-item w3-button w3-red w3-hover-white w3-xlarge  w3-right" ><i class="fa fa-sign-out "></i> Logout </button>
</form>
 
  <a href="dashboard.php" class="w3-bar-item w3-button w3-green w3-hover-white w3-xlarge  w3-right" ><i class="fa  fa-dashboard"></i> Dashboard </a>
  <span class="w3-bar-item w3-left w3-xlarge">DDL Associates Sdn Bhd</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <h4><strong>Administrator Page</strong></h4>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $username; ?></strong></span><br>
      <span><strong><?php echo $email; ?></strong></span>
    </div>
  </div>
  <hr>

  <div class="w3-container">
    <h5><strong>Pages</strong></h5>
  </div>
  <div class="w3-bar-block">
    <a href="about.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  About Us</a>
    <a href="services_preview.php?id=1" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Services</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i> Contact Us</a><br>
  </div>
  <div class="w3-container">
  <h5><strong>Form</strong></h5>
  </div>
  <div class="w3-bar-block">
    
    <a href="#" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>  Received</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Pending for Approval</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Approved</a><br>
  </div>
   <div class="w3-container">
  <h5><strong>Databases</strong></h5>
  </div>
  <div class="w3-bar-block">
    <a href="admin.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Admin </a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  User</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Client</a>
    <br>
  </div>
  
</nav>


<!-- Overlay effect when opening sidebar on small screens -->


<!-- !PAGE CONTENT! -->


 
  <!-- End page content -->
</div>



</body>
</html>
