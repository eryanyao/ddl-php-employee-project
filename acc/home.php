<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="w3-dark-grey" style="background-image: linear-gradient(to bottom, blueviolet,pink,Fuchsia);">

  <?php
  $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/n/acc/";
  include($IPATH . "nav.php");
  require 'includes/database.php';

  $sqlReceive = "SELECT * FROM form WHERE status = 'Received' AND user_id=".$_SESSION['userId'];
  $sqlProcess = "SELECT * FROM form WHERE status = 'In Process' AND user_id=".$_SESSION['userId'];
  $sqlCompleted = "SELECT * FROM form WHERE status = 'Completed' AND user_id=".$_SESSION['userId'];
  $sqlNorti = "SELECT * FROM norti";

  $queryReceive = mysqli_query($conn,$sqlReceive);
  $queryProcess = mysqli_query($conn,$sqlProcess);
  $queryCompleted = mysqli_query($conn,$sqlCompleted);
  $queryNorti = mysqli_query($conn,$sqlNorti);

  $receive = mysqli_num_rows($queryReceive);
  $process = mysqli_num_rows($queryProcess);
  $complete = mysqli_num_rows($queryCompleted);
  $norti = mysqli_num_rows($queryNorti);
  ?>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:53px;">

    <header class="w3-container" style="padding-top:22px;margin-left:30px;">
      <h5><b><i class="fa fa-home "></i> &nbsp; Home </b></h5>
    </header>

    <div class="w3-row-padding w3-margin-bottom" style="margin-right: 10px;margin-left:10px;margin-top:10px;">
      

      <div class="w3-quarter">
        <div class="w3-container w3-padding-16 w3-hover-black" style="background-image: linear-gradient(to right, red,orange);">
          <div class="w3-left"><i class="fa fa-envelope w3-xxxlarge"></i></div>
          <div class="w3-right">
            <h2><?php echo $receive; ?></h2>
          </div>
          <div class="w3-clear"></div>
          <h4>Received</h4>
        </div>
      </div>

      <div class="w3-quarter">
        <div class="w3-container w3-padding-16 w3-hover-black" style="background-image: linear-gradient(to right,gold,green);">
          <div class="w3-left"><i class="fa fa-clock-o w3-xxxlarge"></i></div>
          <div class="w3-right">
            <h2><?php echo $process; ?></h2>
          </div>
          <div class="w3-clear"></div>
          <h4>In Process</h4>
        </div>
      </div>

      <div class="w3-quarter">
        <div class="w3-container w3-text-white w3-padding-16 " style="background-image: linear-gradient(to right,blue,indigo);">
          <div class="w3-left"><i class="fa fa-check w3-xxxlarge"></i></div>
          <div class="w3-right">
            <h2><?php echo $complete; ?></h2>
          </div>
          <div class="w3-clear"></div>
          <h4>Completed</h4>
        </div>
      </div>

      <div class="w3-quarter">
        <div class="w3-container w3-padding-16" style="background-image: linear-gradient(to right,purple,violet);">
          <div class="w3-left"><i class="fa fa-bell w3-xxxlarge"></i></div>

          <div class="w3-right">
            <h2><?php echo $norti; ?></h2>
          </div>

          <div class="w3-clear"></div>
          <h4>Nortification</h4>
        </div>
      </div>
    </div>

    <div class="w3-row-padding w3-margin-bottom w3-white" style="margin-right: 30px;margin-top:20px;margin-left:30px;">
      <div class="w3-container w3-row-padding w3-margin-bottom w3-margin-top">
        <h3 class="w3-text-black"><strong>Nortification</strong></h3>
      </div>
      <?php
      
      $query = mysqli_query($conn, "SELECT * FROM `norti`");

      while ($row = mysqli_fetch_array($query)) {
        echo '<div class="w3-container w3-row-padding w3-margin-bottom w3-margin-top">
        <div class="w3-card-4" style="width:80%;">
          <header class="w3-container w3-black w3-padding">
            <h4>' . $row['title'] . '</h4>
          </header>

          <div class="w3-container w3-padding">
            <p>' . $row['description'] . '</p>
          </div>

          <footer class="w3-container w3-black w3-padding">
            <h6>' . $row['date'] . '</h6>
          </footer>
        </div>
        <br>
        </div>';
      }
      ?>
    </div>

    <!-- Footer -->

    <!-- End page content -->
  </div>
  <div class="w3-main" style="margin-left:300px;margin-top:53px;">
    <footer class=" w3-black">
      <?php
      include($IPATH . "footer.php");
      ?>
    </footer>
  </div>


</body>

</html>