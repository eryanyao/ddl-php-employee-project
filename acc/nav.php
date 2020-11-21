<?php 
  session_start();  
  require 'session.php';
?>
<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="w3-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  
  <form action="../php/logout.inc.php" method="POST">
  <button type="submit" name="logout-submit" class="w3-bar-item w3-button w3-red w3-hover-white w3-xlarge  w3-right" ><i class="fa fa-sign-out "></i> Logout </button>
</form>
 
  <span class="w3-bar-item w3-left w3-xlarge">DDL Associates Sdn Bhd</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col  w3-bar">
      <span>Welcome, <br><strong>
      <span><strong><?php echo $email; ?></strong></span><br>
      <span><strong><?php echo 'ID: ' .$id; ?></strong></span>
    </div>
  </div>
  <hr>
  <div class="w3-bar-block">
  
  <a href="home.php" class="w3-bar-item w3-button w3-padding  w3-large w3-hover-black"><i class="fa fa-home fa-fw"></i>  Home</a><br>
  </div>
  <div class="w3-container">
    <h5><strong>ENQUIRY FORM</strong></h5>
  </div>
  <div class="w3-bar-block">
  
    <a href="enquiry_new.php" class="w3-bar-item w3-button w3-padding  w3-large w3-hover-red"><i class="fa fa-book fa-fw"></i>  New Form</a>
    <a href="enquiry_view.php" class="w3-bar-item w3-button w3-padding  w3-large w3-hover-blue"><i class="fa fa-eye fa-fw"></i>  View Previous</a>
    <a href="enquiry_check.php?status=received" class="w3-bar-item w3-button w3-padding w3-large w3-hover-teal"><i class="fa fa-check fa-fw"></i>  Check Status</a>
    <br>
  </div>

  <div class="w3-container">
    <h5><strong>SETTINGS</strong></h5>
  </div>
  <div class="w3-bar-block">
  <form action="../php/logout.inc.php" method="POST">
    <button type="submit" class="w3-bar-item w3-button w3-padding  w3-large"><i class="fa fa-sign-out fa-fw"></i>  Logout</button>
  </form>
    <br>
  </div>
  
</nav>


<!-- Overlay effect when opening sidebar on small screens -->


<!-- !PAGE CONTENT! -->


 
  <!-- End page content -->
</div>



</body>
</html>
