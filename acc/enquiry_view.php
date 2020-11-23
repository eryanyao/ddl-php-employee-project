<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../assets/js/sweetalert.min.js"></script>
<body class="w3-dark-grey">

<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/acc/"; include($IPATH."nav.php");
?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:53px;">

  <header class="w3-container" style="padding-top:22px;margin-left:30px;">
    <h5><b><i class="fa fa-eye "></i> &nbsp; View Previous </b></h5>
  </header>
  <br>
  <br>

  <?php 
    require 'includes/database.php';
    $query = mysqli_query($conn,"SELECT id,companyName,capital,natureofBusiness FROM form WHERE user_id=".$_SESSION['userId']);
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
        </table>
        <br>
        <a href="enquiry_detail.php?id='.$row['id'].'" class="w3-button w3-border w3-black">Show Details</a>
        <br><br>
      </div>

    </div>
    <br>';
   };
  ?>
  
   

  <?php 
						if(isset($_GET['error'])){?>
							<script>
							  swal({
								title: "Form Submit Unsuccessfully",
								text: "Please try again.",
								icon: "error",
								button: "OK!",
							  });
							</script>
						  <?php
            }
            if(isset($_GET['success'])){?>
							<script>
							  swal({
								title: "Form Submit Successfully",
								text: "Thank you.",
								icon: "success",
								button: "OK!",
							  });
							</script>
						  <?php
						}
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
