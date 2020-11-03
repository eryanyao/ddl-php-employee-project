<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/admin/"; include($IPATH."nav.php");
    require('../php/about.inc.php');
?>

<div class="w3-main" style="margin-left:330px;margin-top:53px;">
      <!-- Header --> 
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-phone "></i> About Us Pages</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">
    <form class="w3-container" method="POST" action="about.php">
    <h2 class="w3-text-black"><strong>Edit Information</strong></h2>
    <p>After saving, the following data will be changed.</p>
    <p>      
    <label class="w3-text-blue"><b>Company Story</b></label>
    <input class="w3-input w3-border" name="story1" type="text" style="margin-bottom:5px;" value="<?php echo $story1; ?>">
    <input class="w3-input w3-border" name="story2" type="text" style="margin-bottom:5px;" value="<?php echo $story2; ?>">
    <input class="w3-input w3-border" name="story3" type="text"
    value="<?php echo $story3; ?>">
    </p>
    <p>      
    <label class="w3-text-blue"><b>Youtube URL</b></label>
    <input class="w3-input w3-border" name="url" type="text" value="<?php echo $url; ?>"></p>
    
    <p>      
    <label class="w3-text-blue"><b>Youtube Description</b></label>
    <input class="w3-input w3-border" name="desc" type="text" value="<?php echo $desc; ?>"></p>    
    <p>      
    <button class="w3-btn w3-blue" type="submit" name="submit">Update</button></p>
    </form>
  </div>
  <?php 
              if(isset($_GET['update'])){
                if($_GET['update'] == "success"){ ?>
                <script>
                  swal({
                    title: "Information Updated",
                    text: "About information update successfully.",
                    icon: "success",
                    button: "OK!",
                  });
                </script>
              <?php
                }
              }
        
             ?>

  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:30px;">
  <div class="w3-container">
  <h2 class="w3-text-black"><strong>Preview</strong></h2>
  <p>This section will display the following pages.</p>
  <iframe src="../about.php" style="height:800px;width:100%;border:3px solid black;" title="About us"></iframe>
  </div>
  <br>
  </div>
</div>