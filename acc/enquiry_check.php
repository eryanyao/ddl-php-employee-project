<!DOCTYPE html>
<html>
<title>Enquiry Form Check</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="w3-dark-grey" style="background-image: linear-gradient(to bottom, blueviolet,pink,Fuchsia);">

<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/acc/"; include($IPATH."nav.php");
?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:53px;">

  <header class="w3-container" style="padding-top:22px;margin-left:30px;">
    <h5><b><i class="fa fa-check "></i> &nbsp; Check Status </b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-left:30px;margin-right: 30px;margin-top:20px;">
  <div class="w3-container">
  <a href="enquiry_check.php?status=received" class="w3-button w3-padding w3-yellow w3-border" style="margin-right: 10px;margin-top:10px;margin-bottom:10px;">Received</a>
  <a href="enquiry_check.php?status=processing" class="w3-button  w3-yellow w3-border" style="margin-right: 10px;" >In Process</a>
  <a href="enquiry_check.php?status=completed" class="w3-button  w3-yellow w3-border" >Completed</a>
</div>
</div>
<br>


  <div class="w3-container" style="margin-right: 20px;margin-left:20px; ">

      <?php 
    require 'includes/database.php';
    $var = $_GET["status"];
    if($var == "received"){
      $query = mysqli_query($conn,"SELECT id,companyName,capital,natureofBusiness,status FROM `form` WHERE status='Received' AND user_id=".$_SESSION['userId']);
      echo '<h4 class="w3-center">Received</h4><br>';
    }
    else if($var == "processing"){
      $query = mysqli_query($conn,"SELECT id,companyName,capital,natureofBusiness,status FROM `form` WHERE status='In Process' AND user_id=".$_SESSION['userId']);
      echo '<h4 class="w3-center">In Process</h4><br>';
    }
    else if($var == "completed"){
      $query = mysqli_query($conn,"SELECT id,companyName,capital,natureofBusiness,status FROM `form` WHERE status='Completed' AND user_id=".$_SESSION['userId']);
      echo '<h4 class="w3-center">Completed</h4><br>';
    }
    
    while($row = mysqli_fetch_array($query)){
      echo '<div class="w3-row-padding w3-margin-bottom w3-light-grey" style="width:50%;margin:0px auto;">
      <div class="w3-container w3-row-padding">
        <br>
        <h3><b>Enquiry Form #'.$row['id'].'</b></h3>
        <br>
        <table style="width: 100%;">
          <tr>
            <td style="width:50%;">Proposed Company Name</td>
            <td>'.$row['companyName'].'</td>
          </tr>
          <tr>
            <td>Paid Up Capital</td>
            <td>'.$row['capital'].'</td>
          </tr>
          <tr>
            <td>Nature of Business</td>
            <td>'.$row['natureofBusiness'].'</td>
          </tr>
          <tr>
            <td>Status</td>
            <td>'.$row['status'].'</td>
          </tr>
        </table>
        <br>
        <a href="enquiry_detail.php?id='.$row['id'].'" class="w3-button w3-border w3-black">Show Details</a>
        <br><br>
      </div>

    </div>
    <br>';
   };
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
