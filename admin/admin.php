<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/admin/"; include($IPATH."nav.php");
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
<div class="w3-main" style="margin-left:330px;margin-top:53px;">

<!-- Header -->
      
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-phone "></i> Admin Management</b></h5>
  </header>
  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">
  <div class="w3-container">
  <a href="#createAdmin" class="w3-button w3-padding w3-yellow w3-border" style="margin-right: 10px;margin-top:10px;margin-bottom:10px;">View Admin</a>
<a href="#createAdmin" class="w3-button  w3-yellow w3-border" >Create Admin</a>

</div>
</div>
  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">
  
  <div class="w3-container"><h2 class="w3-text-black"><strong>View Admin</strong></h2></div>
  <?php 
    require('includes/database.php');

    echo '<form class="w3-container" method="POST" action="'.$_SERVER['PHP_SELF'].'"></form>';

    if(isset($_POST[''])){
   	
    }

    $query = mysqli_query($conn, "SELECT * FROM `admin` ");
    echo '<div class="w3-container">
    <table>
      <thead>
        <tr>
          <th class="content" style="width:50px;">ID</th>
          <th class="content" style="width:150px;">Username</th>
          <th class="content">Email</th>
          <th ></th>
          <th ></th>
        </tr>
      </thead>
      <tbody>';
    
      while($row = mysqli_fetch_array($query)){
        echo '<tr>
        <th class="content">'.$row['idAdmin'].'</th>
        <td class="content">'.$row['uidAdmin'].'</td>
        <td class="content">'.$row['emailAdmin'].'</td>
        <td class="mb-2"><input type="button" style="width:100px;" onclick="window.location = \'edit.php?sn='.$row['idAdmin'].'\'" value="Edit" class="btn btn-success"></td>
        <td><input type="button" style="width:100px;"onclick="window.location = \'delete.php?sn='.$row['idAdmin'].'\'" value="Delete" class="btn btn-danger"></td></tr></tbody></div>
        </tr>';
      };
      echo '</tbody>
      </table>
      </div><br>';

  ?>

  </div>

  <div id="createAdmin" class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">
  <form class="w3-container" method="POST" action="includes/signup.inc.php">
    <h2 class="w3-text-black"><strong>Create New Admin</strong></h2>
    <p>Create a new administrator.</p>
    
      <?php
      if(isset($_GET['error'])){
        if($_GET['error'] == "emptyfields"){
          echo '<p class="w3-text-red"><p class="w3-text-red">*Fill in all fields.</p>';
        }
        else if($_GET['error'] == "invaliduidmail"){
          echo '<p class="w3-text-red">*Invalid username and email.</p>';
        }
        else if($_GET['error'] == "invaliduid"){
          echo '<p class="w3-text-red">*Invalid username.</p>';
        }
        else if($_GET['error'] == "invalidmail"){
          echo '<p class="w3-text-red">*Invalid email.</p>';
        }
        else if($_GET['error'] == "passwordcheck"){
          echo '<p class="w3-text-red">*Your passwords do not match.</p>';
        }
        else if($_GET['error'] == "usertaken"){
          echo '<p class="w3-text-red">*Usernamme is already taken.</p>';
        }
        else if($_GET["signup"] == "success"){
          echo '<p class="w3-text-green">Sign Up Successfully.</p>';
        }
      } 
      
    
      ?>
    </p>
    <p>      
    <label class="w3-text-blue"><b>Username</b></label>
    <input class="w3-input w3-border" name="uid" type="text"></p>
    <p>      
    <label class="w3-text-blue"><b>Email</b></label>
    <input class="w3-input w3-border" name="mail" type="text" ></p>
    <p>      
    <label class="w3-text-blue"><b>Password</b></label>
    <input class="w3-input w3-border" name="pwd" type="password" ></p>
    <p>      
    <label class="w3-text-blue"><b>Confirm Password</b></label>
    <input class="w3-input w3-border" name="pwd-repeat"  type="password" ></p>
    <p>      
    <button type="submit" name="signup-submit" class="w3-btn w3-blue">Save</button></p>
    
    </form>
  </div>
</div>