<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/admin/"; include($IPATH."services.php");
?>

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
<script>
function sweet() {
     swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
});
 }
 function delet(){
swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
	}
</script>

<div id="createAdmin" class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-top:20px;margin-left:330px;margin-right:30px;">


  <div class="w3-container">
  <h2 class="w3-text-black"><strong>Control</strong></h2>
  <p>This section will allow the control services pages.</p>
  </div>


  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">
  
  <?php 
    require('includes/database.php');

    echo '<form class="w3-container" method="POST" action="'.$_SERVER['PHP_SELF'].'"></form>';
    if(isset($_POST[''])){
   	
    }

    $query = mysqli_query($conn, "SELECT * FROM `service` ");
    echo '<div class="w3-container">
    <table>
      <thead>
        <tr>
          <th class="content" style="width:50px;">ID</th>
          <th class="content" style="width:200px;">Name</th>
          <th ></th>  
          <th ></th>
          <th ></th>
        </tr>
      </thead>
      <tbody>';
    
      while($row = mysqli_fetch_array($query)){
        echo '<tr>
        <th class="content">'.$row['service_id'].'</th>
        <td class="content">'.$row['service_name'].'</td>
      
        <td class="mb-2"><input type="button" style="width:100px;" onclick="window.location = \'edit.php?sn='.$row['service_id'].'\'" value="View" class="btn btn-success"></td>
        <td class="mb-2"><input type="button" style="width:100px;" onclick="window.location = \'services_edit.php?sn='.$row['service_id'].'\'" value="Edit" class="btn btn-success"></td>
        <td><input type="button" style="width:100px;"onclick="window.location = \'services_control.php?delete='.$row['service_id'].'\'" value="Delete" class="btn btn-danger"></td></tr></tbody></div>
        </tr>';
      };
      echo '</tbody>
      </table>
      </div><br>';

  ?>

  <?php 
    if(isset($_GET['delete'])){
      ?>
       <script>
        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this imaginary file!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("Poof! Your imaginary file has been deleted!", {
              icon: "success",
              <?php $delete = mysqli_query($conn, "DELETE FROM 	service  WHERE service_id='{$_POST['delete']}'"); ?>;
            });
          } else {
            swal("Your imaginary file is safe!");
          }
        });
            
        </script>
        <?php
    }
  ?>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

  </div>

</div>