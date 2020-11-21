<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/admin/"; include($IPATH."nav.php");
    require('../php/contact.php');

    $var = $_GET["id"];

    if($var == 1){
      $url = "https://www.jotform.com/tables/203069021056445";
      $title = "View All";
    }
    else if($var == 2){
      $url = "https://www.jotform.com/inbox/203069021056445";
      $title = "Inbox";
    }
    else if($var == 3){
      $url = "https://www.jotform.com/analytics/203069021056445";
      $title = "Analytics";
    }
?>

<div class="w3-main" style="margin-left:330px;margin-top:53px;">
      <!-- Header -->
      
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-book "></i> &nbsp;JotForm Dashboard</b></h5>
  </header>
 
  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">
  <div class="w3-container">
  <a href="form_dashboard.php?id=1" class="w3-button w3-padding w3-yellow w3-border" style="margin-right: 10px;margin-top:10px;margin-bottom:10px;">View All</a>
  <a href="form_dashboard.php?id=2" class="w3-button  w3-yellow w3-border" style="margin-right: 10px;" >Inbox</a>
  <a href="form_dashboard.php?id=3" class="w3-button  w3-yellow w3-border" style="margin-right: 10px;" >Analysis</a>
</div>
</div>
  

  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:30px;">
  <div class="w3-container"><br>
  <h3 class="w3-center"><?php echo $title; ?></h3>
  <iframe src=<?php echo $url; ?> style="height:800px;width:100%;border:3px solid black;" title="Iframe Example"></iframe>
  
  </div>
  <br>
  </div>
</div>