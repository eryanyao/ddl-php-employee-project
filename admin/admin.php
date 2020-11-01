<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/admin/"; include($IPATH."nav.php");
?>

<div class="w3-main" style="margin-left:330px;margin-top:53px;">
      <!-- Header -->
      
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-phone "></i> Admin Management</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">
  <div class="w3-container"><h2 class="w3-text-black"><strong>View Admin</strong></h2></div>
  </div>

  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">
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