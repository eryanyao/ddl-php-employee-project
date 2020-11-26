<?php
    $IPATH = $_SERVER["DOCUMENT_ROOT"]."/n/admin/"; include($IPATH."services.php");
    require('includes/database.php');

    if(isset($_POST['update'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $desc = mysqli_real_escape_string($conn, $_POST['desc']);
        $line1 = mysqli_real_escape_string($conn, $_POST['l1']);
        $line2 = mysqli_real_escape_string($conn, $_POST['l2']);
        $line3 = mysqli_real_escape_string($conn, $_POST['l3']);
        $line4 = mysqli_real_escape_string($conn, $_POST['l4']);
        $line5 = mysqli_real_escape_string($conn, $_POST['l5']);
        $line6 = mysqli_real_escape_string($conn, $_POST['l6']);
        
        $update = mysqli_query($conn, "UPDATE service SET service_name='$name', service_desc='$desc', line1='$line1',line2='$line2',line3='$line3',line4='$line4',line5='$line5',line6='$line6' WHERE service_id='{$_POST['service_id']}'");

    }
    
    $query = mysqli_query($conn, "SELECT * FROM service WHERE service_id='{$_REQUEST['sn']}' ");

    while($row = mysqli_fetch_array($query)){
        $name = $row['service_name'];
        $desc = $row['service_desc'];
        $line1 = $row['line1'];
        $line2 = $row['line2'];
        $line3 = $row['line3'];
        $line4 = $row['line4'];
        $line5 = $row['line5'];
        $line6 = $row['line6'];
        $img1 = $row['img1'];
        $img2 = $row['img2'];
        $img3 = $row['img3'];
    }

   
?>

<div id="createAdmin" class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-top:20px;margin-left:330px;margin-right:30px;">

  <div class="w3-container">
  <p>      
    <button onclick="goBack()" class="w3-btn w3-blue">Back</button></p>
  <h2 class="w3-text-black"><strong>Edit Services</strong></h2>
  <p>This section will allow user edit services pages.</p>
  <form class="w3-container" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>?sn=<?php echo $_REQUEST['sn']; ?>">
  <input type="hidden" value="<?php echo $_REQUEST['sn']; ?>" name="service_id" >
    </p>
    <p>      
    <label class="w3-text-blue"><b>Name</b></label>
    <input class="w3-input w3-border" name="name" type="text" value="<?php echo $name; ?>"></p>

    <p>      
    <label class="w3-text-blue"><b>Description</b></label>
    <textarea rows="3" class="w3-input w3-border" name="desc" type="text"  ><?php echo $desc; ?></textarea></p>
    <p>      
    <label class="w3-text-blue"><b>Line 1</b></label>
    <input class="w3-input w3-border" name="l1" type="text" value="<?php echo $line1; ?>" ></p>
    <p>      
    <label class="w3-text-blue"><b>Line 2</b></label>
    <input class="w3-input w3-border" name="l2"  type="text" value="<?php echo $line2; ?>" ></p>
    <p>
    <label class="w3-text-blue"><b>Line 3</b></label>
    <input class="w3-input w3-border" name="l3"  type="text" value="<?php echo $line3; ?>" ></p>
    <p>
    <label class="w3-text-blue"><b>Line 4</b></label>
    <input class="w3-input w3-border" name="l4"  type="text" value="<?php echo $line4; ?>" ></p>
    <p>
    <label class="w3-text-blue"><b>Line 5</b></label>
    <input class="w3-input w3-border" name="l5"  type="text" value="<?php echo $line5; ?>" ></p>
    <p>
    <label class="w3-text-blue"><b>Line 6</b></label>
    <input class="w3-input w3-border" name="l6"  type="text" value="<?php echo $line6; ?>" ></p>
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
    <input id="FileUpload6" name="img2"  type="file"   />
    </div>
</p>
<p>
    <label class="w3-text-blue"><b>Images 3</b></label>
    <div style="text-align: center;"> 
    <fieldset style="width: 300px;height: 200px;">
    <legend>Show image preview before upload</legend>
    <img id="Image6" Height="150px" Width="240px" /><br />
    <input id="FileUpload6" name="img3"  type="file"  />
    </div>
</p>
    <br><br>
    <p>      
    <button type="submit" name="update" class="w3-btn w3-blue">Save</button></p>
    
    </form>
  
  </div>
</div>
<script>
function goBack() {
  window.history.back();
}
</script>

<?php 
    if(isset($_GET['update'])){
    if($_GET['update'] == "success"){ ?>
    <script>
        swal({
        title: "Information Updated",
        text: "Contact information update successfully.",
        icon: "success",
        button: "OK!",
        });
    </script>
    <?php
    }
    }
        
?>

<script src="//code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
    function ShowImagePreview6(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#<%=Image6.ClientID%>').prop('src', e.target.result)
                .width(240)
                .height(150);
        };
        reader.readAsDataURL(input.files[0]);
        }
    }
</script>