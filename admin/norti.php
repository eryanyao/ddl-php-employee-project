<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . "/n/admin/";
include($IPATH . "nav.php");

?>

<div class="w3-main" style="margin-left:330px;margin-top:53px;">
  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-bell "></i> Nortification</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">
    <form class="w3-container" method="POST" action="includes/norti.inc.php">
      <h2 class="w3-text-black"><strong>Add new nortification</strong></h2>
      <p>After saving, the following data will be changed.</p>
      <p>
        <label class="w3-text-blue"><b>Title</b></label>
        <input class="w3-input w3-border" name="title" type="text" style="margin-bottom:5px;" placeholder=" Enter title here..." required>
      </p>
      <p>
        <label class="w3-text-blue"><b>Description</b></label>
        <textarea class="w3-input w3-border" rows="3" cols="60" name="desc" type="text" placeholder=" Enter description here..." required></textarea></p>

      <p>
        <button class="w3-btn w3-blue" type="submit" name="add-submit">Add</button></p>
    </form>
  </div>


  <?php
  if (isset($_GET['update'])) {
    if ($_GET['update'] == "success") { ?>
      <script>
        swal({
          title: "New nortification Added",
          text: "nortification add successfully.",
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
      <p>This section will display the following nortification.</p>

      <?php
      require 'includes/database.php';
      $query = mysqli_query($conn, "SELECT * FROM `norti`");

      while ($row = mysqli_fetch_array($query)) {
        echo '<div class="w3-card-4" style="width:80%;">
          <header class="w3-container w3-black">
            <h4>' . $row['title'] . '</h4>
          </header>

          <div class="w3-container">
            <p>' . $row['description'] . '</p>
          </div>

          <footer class="w3-container w3-black">
            <h6>' . $row['date'] . '</h6>
          </footer>
        </div>
        <br>
        
        <a href="norti.php?delete=' . $row['id'] . '" class="w3-button w3-red">Delete</a>
        <br><br>';
      }
      ?>

<?php 
    if(isset($_GET['delete'])){
      ?>
       <script>
        swal({
          title: "Data Deleted",
          text: "Your nortification information has been deleted!",
          icon: "success",
          button: "Yes"
          
        }).then(function(){
          window.location.href = "norti.php";
        });
        </script>
       <?php $delete = mysqli_query($conn, "DELETE FROM 	norti WHERE id='{$_GET['delete']}'"); }?>;



    </div>
    <br>
  </div>
</div>