<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/admin/"; include($IPATH."nav.php");
    require('../php/contact.php');
?>

<div class="w3-main" style="margin-left:330px;margin-top:53px;">
      <!-- Header -->
      
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-phone "></i> View All Enquiry Form</b></h5>
  </header>
 
  

  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:30px;">
  <div class="w3-container">
  <a href="form_all.php?status=all" class="w3-button w3-padding w3-yellow w3-border" style="margin-right: 10px;margin-top:10px;margin-bottom:10px;">All</a>
  <a href="form_all.php?status=received" class="w3-button w3-padding w3-yellow w3-border" style="margin-right: 10px;margin-top:10px;margin-bottom:10px;">Received</a>
  <a href="form_all.php?status=processing" class="w3-button  w3-yellow w3-border" style="margin-right: 10px;" >In Process</a>
  <a href="form_all.php?status=completed" class="w3-button  w3-yellow w3-border" >Completed</a>

  </div>
  </div>
  <br>

  <?php 
    require 'includes/database.php';
    $var = $_GET["status"];
    if($var == "all"){
        $query = mysqli_query($conn,"SELECT id,companyName,capital,natureofBusiness,status FROM `form`" );
        echo '<div class="w3-container w3-row-padding w3-margin-bottom" style="margin-right: 30px;margin-top:30px;"><h2 class="w3-center"><b>All</b></h2><hr><br></div>';
      }
    else if($var == "received"){
      $query = mysqli_query($conn,"SELECT id,companyName,capital,natureofBusiness,status FROM `form` WHERE status='Received'");
      echo '<div class="w3-container w3-row-padding w3-margin-bottom" style="margin-right: 30px;margin-top:30px;"><h2 class="w3-center"><b>Received</b></h2><hr><br></div>';
    }
    else if($var == "processing"){
      $query = mysqli_query($conn,"SELECT id,companyName,capital,natureofBusiness,status FROM `form` WHERE status='In Process'");
      echo '<div class="w3-container w3-row-padding w3-margin-bottom" style="margin-right: 30px;margin-top:30px;"><h2 class="w3-center"><b>In Process</b></h2><hr><br></div>';
    }
    else if($var == "completed"){
      $query = mysqli_query($conn,"SELECT id,companyName,capital,natureofBusiness,status FROM `form` WHERE status='Completed'");
      echo '<div class="w3-container w3-row-padding w3-margin-bottom" style="margin-right: 30px;margin-top:30px;"><h2 class="w3-center"><b>Completed</b></h2><hr><br></div>';
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
            <td>Nature of Business</td>
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