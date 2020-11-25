<!DOCTYPE html>
<html>
<title>User Management</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  table {
    border-collapse: collapse;
  }

  table,
  thead,
  tr,
  th,
  td {
    border: 2px solid black;
  }

  .content {
    padding-left: 5px;
  }
</style>

<body>
  <?php
  $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/n/admin/";
  include($IPATH . "nav.php");
  ?>
  <div class="w3-main" style="margin-left:330px;margin-top:53px;">

    <!-- Header -->

    <header class="w3-container" style="padding-top:22px">
      <h5><b><i class="fa fa-book "></i> Enquiry Form</b></h5>
    </header>
<?php

?>
    

  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">

    <div class="w3-container">
      <h2 class="w3-text-black"><strong>View Form</strong></h2>
    </div>
    <?php
    require('includes/database.php');

    
?>



   
    <br>
  </div>

  </div>

</body>