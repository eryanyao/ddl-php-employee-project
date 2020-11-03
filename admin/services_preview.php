<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/admin/"; include($IPATH."services.php");
?>
<div id="createAdmin" class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-top:20px;margin-left:330px;margin-right:30px;">


  <div class="w3-container">
  <h2 class="w3-text-black"><strong>Preview</strong></h2>
  <p>This section will display the following pages.</p>
  <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Page:</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php 
              require("../php/database.php");
              $query = mysqli_query($conn,"SELECT service_id,service_name FROM service");
              while($row = mysqli_fetch_array($query)){
                 echo '<a class="dropdown-item" href="services_preview.php?id='.$row["service_id"].'">'.$row["service_name"].'</a>';
              };
              
            
            ?>
          </div>
        </li>
  </ul>
  <iframe src="../services.php?id=<?php echo $_GET["id"]; ?>" style="height:800px;width:100%;border:3px solid black;" title="Iframe Example"></iframe><br><br>
  
  </div>
</div>

  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  

<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/mobster.js"></script>