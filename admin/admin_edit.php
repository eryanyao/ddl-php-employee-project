<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/admin/"; include($IPATH."admin.php");
    require('includes/database.php');

    if(isset($_POST['update'])){
        $username = mysqli_real_escape_string($conn, $_POST['uidAdmin']);
        $email = mysqli_real_escape_string($conn, $_POST['emailAdmin']);
        
        
        $update = mysqli_query($conn, "UPDATE admin SET uidAdmin='$username', emailAdmin='$email' WHERE idAdmin='{$_POST['idAdmin']}'");
    }
    
    $query = mysqli_query($conn, "SELECT * FROM admin WHERE idAdmin='{$_REQUEST['sn']}' ");

    while($row = mysqli_fetch_array($query)){
        $username = $row['uidAdmin'];
        $email = $row['emailAdmin'];
        
    }

   
?>

<div id="createAdmin" class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-top:20px;margin-left:330px;margin-right:30px;">


  <div class="w3-container">
 
  <h2 class="w3-text-black"><strong>Edit Admin</strong></h2>
  <p>This section will allow user to edit Admin</p>
  <form class="w3-container" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>?sn=<?php echo $_REQUEST['sn']; ?>">
  <input type="hidden" value="<?php echo $_REQUEST['sn']; ?>" name="idAdmin" >
    </p>
    <p>      
    <label class="w3-text-blue"><b>Username</b></label>
    <input class="w3-input w3-border" name="uidAdmin" type="text" value="<?php echo $username; ?>"></p>

    <p>      
    <label class="w3-text-blue"><b>Description</b></label>
    <textarea rows="3" class="w3-input w3-border" name="emailAdmin" type="text"  ><?php echo $email; ?></textarea></p>
   
    <br><br>
    <p>      
    <button type="submit" name="update" class="w3-btn w3-blue">Save</button></p>
    
    </form>