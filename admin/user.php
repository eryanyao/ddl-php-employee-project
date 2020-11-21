
<!DOCTYPE html>
<html>
<title>User Management</title>
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
    <h5><b><i class="fa fa-user-circle-o "></i> User Management</b></h5>
  </header>
  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">

  <div class="w3-container">
  <a href="#createAdmin" class="w3-button w3-padding w3-yellow w3-border" style="margin-right: 10px;margin-top:10px;margin-bottom:10px;">View User</a>
</div>
</div>

  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">
  
  <div class="w3-container"><h2 class="w3-text-black"><strong>View User</strong></h2></div>
  <?php 
    require('includes/database.php');

    echo '<form class="w3-container" method="POST" action="'.$_SERVER['PHP_SELF'].'"></form>';

    if(isset($_POST[''])){
   	
    }

    $query = mysqli_query($conn, "SELECT * FROM `user` ");
    echo '<div class="w3-container">
    <table>
      <thead>
        <tr>
          <th class="content" style="width:50px;">ID</th>
          <th class="content" style="width:200px;">Email</th>
     
          
          <th ></th>
        </tr>
      </thead>
      <tbody>';
    
      while($row = mysqli_fetch_array($query)){
        echo '<tr>
        <th class="content">'.$row['id'].'</th>
        <td class="content">'.$row['email'].'</td>
      
        <td><input type="button" style="width:100px;"onclick="window.location = \'user.php?delete='.$row['id'].'\'" value="Delete" class="btn btn-danger"></td></tr></tbody></div>
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
          title: "Data Deleted",
          text: "Your services page information has been deleted!",
          icon: "success",
          button: "Yes"
          
        }).then(function(){
          window.location.href = "user.php";
        });
        </script>
       <?php $delete = mysqli_query($conn, "DELETE FROM user WHERE id='{$_GET['delete']}'"); }?>
  </div>

</div>

</body>
