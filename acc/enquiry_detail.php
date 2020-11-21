<!DOCTYPE html>
<html>
<title>Enquiry Form Check</title>
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
    <h5><b><i class="fa fa-book "></i> &nbsp; Enquiry Details </b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom" style="margin-left:30px;margin-right: 30px;margin-top:20px;">
  <div class="w3-container">
  <a onclick="goBack()" class="w3-button w3-padding w3-yellow w3-border" style="margin-right: 10px;margin-top:10px;margin-bottom:10px;">Back</a>
</div>
</div>
<br>


  <div class="w3-container" style="margin-right: 20px;margin-left:20px; ">

      <?php 
    require 'includes/database.php';
    
  ?>

  </div>





  </div> 
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
