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
    <h5><b><i class="fa fa-book "></i> &nbsp; Submit Application </b></h5>
  </header>

  <div class="w3-container" style="margin-right: 20px;margin-left:20px; ">
  <div class="w3-row-padding w3-margin-bottom w3-light-grey w3-center" style="margin-right: 30px;margin-top:20px;">
  <div class="w3-container">
  <br>
  <i class="fa fa-check-circle-o fa-fw  w3-text-green" style="font-size:200px;"></i>
        <h1>Thank You</h1>
        <p>You submission has been received.</p>
<br>
  </div>
  </div>
  
  

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