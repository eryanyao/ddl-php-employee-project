
<!DOCTYPE html>
<html>
<title>Services Page Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
}

table, thead, tr, th, td {
  border: 2px solid black;
}
.content{
  padding-left: 5px;
}
</style>
<body>
<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/admin/"; include($IPATH."nav.php");
?>
<div class="w3-main" style="margin-left:330px;margin-top:53px;">

<!-- Header -->
      
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-phone "></i> Services Pages</b></h5>
  </header>
  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">
  <div class="w3-container">
  <a href="services_preview.php?id=1" class="w3-button w3-padding w3-yellow w3-border" style="margin-right: 10px;margin-top:10px;margin-bottom:10px;">Preview</a>
  <a href="services_add.php" class="w3-button  w3-yellow w3-border" style="margin-right: 10px;" >Add Services</a>
  <a href="services_control.php" class="w3-button  w3-yellow w3-border" >Control</a>
</div>
</div>



  </div>

</div>

</body>


  