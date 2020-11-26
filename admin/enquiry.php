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
    echo '<div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">
  <div class="w3-container">
    <form action="' . $_SERVER['PHP_SELF'] . '" method="post"><b>
    <br>
        <table border="3">
          <tr>
            <td><input type="text" class="w3-input" style="width:300px;" name="searchquery" placeholder="Search by company name"></td>
            <td><input type="submit" class="w3-button" name="search" value="Search" style="float:left" ></td>
          </tr>
        </table>
      <br>
  
  </form>
</div>
</div>';
    ?>


    <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">

      <div class="w3-container">
        <h2 class="w3-text-black"><strong>View Form</strong></h2>
      </div>
      <?php
      require('includes/database.php');


      if (isset($_POST['search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['searchquery']);
        $query = mysqli_query($conn, "SELECT id, status, companyName,capital,natureofBusiness,busAdd  FROM form  WHERE companyName LIKE '%$search%'");





        if (isset($_POST['search'])) {
          if (mysqli_num_rows($query) != 0) {

            echo ' <div class="w3-container"> 
<table class="w3-table w3-striped " >
  <thead class="table table-hover table-dark">
    <tr>
      <th>FormId</th>
      <th>Company Name</th>
      <th>Capital</th>
      <th>Business Type</th>
      <th>Business Address</th>
    <th >Business Address</th>
   
   <th> </th>
   <th> </th>
      <th></th>
     
     </tr>
  </thead></div>';



            while ($row = mysqli_fetch_array($query)) {
              echo '<div class="w3-container">
        <tbody class="mb-2">
            <tr>
           <th scope="row mb-2">' . $row['id'] . '</th>
           <td class="mb-2">' . $row['companyName'] . '</td>
            <td class="mb-2">' . $row['capital'] . '</td>
            <td class="mb-2">' . $row['natureofBusiness'] . '</td>
            <td class="mb-2" >' . $row['busAdd'] . '</td>
			            <td class="mb-2" >' . $row['status'] . '</td>

                  <td><input type="button" onclick="window.location = \'enquiry_view.php?id=' . $row['id'] . '\'" value="View All" class="btn btn-danger">
                  </td><td class="mb-2"><input type="button" onclick="window.location = \'enquiry_edit.php?id=' . $row['id'] . '\'" value="Edit" class="btn btn-success"></td>
		<td><input type="button" onclick="window.location = \'formdelete.php?id=' . $row['id'] . '\'" value="Delete" class="btn btn-danger">
		</tr></tbody></div>';
            }
            echo '</table><br>';
            exit();
          } else {
            echo '<center><h2>Sorry No Results Were Found</h2></center>';
            exit();
          }
        }
      }


      $query = mysqli_query($conn, "SELECT id, companyName,capital,natureofBusiness,busAdd, status FROM form");

      echo ' <div class="w3-container"> 
<table class="w3-table w3-striped">
  <thead class="table table-hover">
    <tr>
      <th>FormId</th>
      <th>Company Name</th>
      <th>Capital</th>
      <th>Business Type</th>
      <th>Business Address</th>
   <th>Status</th>
   
   <th> </th>
   <th> </th>
      <th scope="col"></th>
     </tr>
  </thead></div>';

      while ($row = mysqli_fetch_array($query)) {
        echo '<div class="container mb-3">
        <tbody >
            <tr>
           <td>' . $row['id'] . '</td>
           <td >' . $row['companyName'] . '</td>
            <td >' . $row['capital'] . '</td>
            <td>' . $row['natureofBusiness'] . '</td>
            <td>' . $row['busAdd'] . '</td>
			      <td>' . $row['status'] . '</td>
			


            <td><input type="button" onclick="window.location = \'enquiry_view.php?id=' . $row['id'] . '\'" value="View" ">
            </td>
            <td ><input type="button" onclick="window.location = \'enquiry_edit.php?id=' . $row['id'] . '\'" value="Edit" ></td>
            <td><input type="button" onclick="window.location = \'formdelete.php?id=' . $row['id'] . '\'" value="Delete" >	</td>
		</tr></tbody></div>';
      }
      echo '</table>';
      ?>

      <?php
      if (isset($_GET['delete'])) {
      ?>
        <script>
          swal({
            title: "Data Deleted",
            text: "Your services page information has been deleted!",
            icon: "success",
            button: "Yes"

          }).then(function() {
            window.location.href = "user.php";
          });
        </script>
      <?php $delete = mysqli_query($conn, "DELETE FROM user WHERE id='{$_GET['delete']}'");
      } ?>
      <br>
    </div>

  </div>

</body>