<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/admin/"; include($IPATH."services.php");
?>

<div id="createAdmin" class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-top:20px;margin-left:330px;margin-right:30px;">


  <div class="w3-container">
  <h2 class="w3-text-black"><strong>Add Services</strong></h2>
  <p>This section will allow user add new services pages.</p>
  <form class="w3-container" method="POST" action="includes/services_add.inc.php">
      
    </p>
    <?php 
        if(isset($_GET['notf'])){
            if($_GET['notf'] == "fieldrequires"){
                echo '<p class="w3-text-red"><p class="w3-text-red">*Fill in all fields.</p>';
            }
            else if($_GET['notf'] == "success"){ 
                ?>
                <script>
                 swal({
                   title: "Data Add Successfully",
                   text: "New services data has been added!",
                   icon: "success",
                   button: "Yes"
                   
                 }).then(function(){
                   window.location.href = "services_control.php";
                 });
                 </script>
                 <?php
            }
        }
    ?>
    <p>      
    <label class="w3-text-blue"><b>Name</b></label>
    <input class="w3-input w3-border" name="name" type="text"></p>
   
    <p>      
    <label class="w3-text-blue"><b>Description</b></label>
    <textarea rows="3" class="w3-input w3-border" name="desc" type="text" ></textarea></p>
    <p>      
    <label class="w3-text-blue"><b>Line 1</b></label>
    <input class="w3-input w3-border" name="l1" type="text" ></p>
    <p>      
    <label class="w3-text-blue"><b>Line 2</b></label>
    <input class="w3-input w3-border" name="l2"  type="text" ></p>
    <p>
    <label class="w3-text-blue"><b>Line 3</b></label>
    <input class="w3-input w3-border" name="l3"  type="text" ></p>
    <p>
    <label class="w3-text-blue"><b>Line 4</b></label>
    <input class="w3-input w3-border" name="l4"  type="text" ></p>
    <p>
    <label class="w3-text-blue"><b>Line 5</b></label>
    <input class="w3-input w3-border" name="l5"  type="text" ></p>
    <p>
    <label class="w3-text-blue"><b>Line 6</b></label>
    <input class="w3-input w3-border" name="l6"  type="text" ></p>
    
    <?php 
        
    ?>
    <p>
    <label class="w3-text-blue"><b>Images 1</b></label>
    <div style="text-align: center;"> 
    <fieldset style="width: 300px;height: 200px;">
    <legend>Show image preview before upload</legend>
    <img id="Image6" Height="150px" Width="240px" /><br />
    <input id="FileUpload6" name="img1"  type="file"   />
    </div>
</p>
<p>
    <label class="w3-text-blue"><b>Images 2</b></label>
    <div style="text-align: center;"> 
    <fieldset style="width: 300px;height: 200px;">
    <legend>Show image preview before upload</legend>
    <img id="Image6" Height="150px" Width="240px" /><br />
    <input id="FileUpload6" name="img2"  type="file" />
    </div>
</p>
<p>
    <label class="w3-text-blue"><b>Images 3</b></label>
    <div style="text-align: center;"> 
    <fieldset style="width: 300px;height: 200px;">
    <legend>Show image preview before upload</legend>
    <img id="Image6" Height="150px" Width="240px" /><br />
    <input id="FileUpload6" name="img3"  type="file" />
    </div>
</p>
    <br><br>
    <p>      
    <button type="submit" name="save-submit" class="w3-btn w3-blue">Save</button></p>
    
    </form>
  
  </div>
</div>
