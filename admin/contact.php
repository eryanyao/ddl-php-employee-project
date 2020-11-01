<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/admin/"; include($IPATH."nav.php");
?>

<div class="w3-main" style="margin-left:330px;margin-top:53px;">
      <!-- Header -->
      
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-phone "></i> Contact Us Pages</b></h5>
  </header>
  <?php 
  require('../php/contact.php');

  ?>
  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">
    <form class="w3-container" method="POST" action="contact.php">
    <h2 class="w3-text-black"><strong>Edit Information</strong></h2>
    <p>After saving, the following data will be changed.</p>
    <p>      
    <label class="w3-text-blue"><b>Location</b></label>
    <input class="w3-input w3-border" name="location" type="text" value="<?php echo $location; ?>"></p>
    <p>      
    <label class="w3-text-blue"><b>Phone Number</b></label>
    <input class="w3-input w3-border" name="phone" type="text" value="<?php echo $phone;?>"></p>
    <p>      
    <label class="w3-text-blue"><b>Email Address</b></label>
    <input class="w3-input w3-border" name="email" type="text" value="<?php echo $email;?>" ></p>
    <p>      
    <button type="submit" name="update" value="Update" class="w3-btn w3-blue">Save</button></p>
    
    </form>
    
  
  </div>

  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:30px;">
  <div class="w3-container">
  <h2 class="w3-text-black"><strong>Preview</strong></h2>
  <p>This section will display the following pages.</p>
  <iframe src="../contact.php" style="height:800px;width:1050px;border:3px solid black;" title="Iframe Example"></iframe>
  
  </div>
  <br>
  </div>
</div>