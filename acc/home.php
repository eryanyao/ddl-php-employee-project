<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="w3-dark-grey">

<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/acc/"; include($IPATH."nav.php");
?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:53px;">

  <header class="w3-container" style="padding-top:22px;margin-left:30px;">
    <h5><b><i class="fa fa-home "></i> &nbsp; Home </b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom" style="margin-right: 10px;margin-left:10px;margin-top:10px;">
    <div class="w3-quarter">
      <a href="#" class="w3-bar-item"> <div class="w3-container w3-red w3-padding-16 w3-hover-black">
        <div class="w3-left"><i class="fa fa-book w3-xxxlarge"></i></div>
    
        <div class="w3-clear"></div>
        <h4>New Form</h4>
      </div></a>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16 w3-hover-black">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>View Previous</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16 w3-hover-black">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Check Status</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16 w3-hover-black">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Nortification</h4>
      </div>
    </div>
  </div>

  <div class="w3-row-padding w3-margin-bottom w3-white" style="margin-right: 30px;margin-top:20px;margin-left:30px;">
  <div class="w3-container w3-row-padding w3-margin-bottom w3-margin-top"><h3 class="w3-text-black"><strong>Information</strong></h3></div>
  
  </div>

  <!-- Footer -->
 
  <!-- End page content -->
</div>
<div class="w3-main" style="margin-left:300px;margin-top:53px;">
<footer class=" w3-black">
  <?php
     include($IPATH."footer.php");
?>
  </footer>
</div>


</body>
</html>
