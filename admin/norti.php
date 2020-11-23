<?php
$IPATH = $_SERVER["DOCUMENT_ROOT"] . "/n/admin/";
include($IPATH . "nav.php");
require('../php/norti.inc.php');
?>

<div class="w3-main" style="margin-left:330px;margin-top:53px;">
  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-bell "></i> Nortification</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom w3-light-grey" style="margin-right: 30px;margin-top:20px;">
    <form class="w3-container" method="POST" action="about.php">
      <h2 class="w3-text-black"><strong>Add new nortification</strong></h2>
      <p>After saving, the following data will be changed.</p>
      <p>
        <label class="w3-text-blue"><b>Title</b></label>
        <input class="w3-input w3-border" name="title" type="text" style="margin-bottom:5px;" placeholder=" Enter title here..." required>
      </p>
      <p>
        <label class="w3-text-blue"><b>Description</b></label>
        <textarea class="w3-input w3-border" rows = "3" cols = "60" name="desc" type="text" placeholder=" Enter description here..." required></textarea></p>

      <p>
        <button class="w3-btn w3-blue" type="submit" name="submit">Add</button></p>
    </form>
  </div>
  <?php
  if (isset($_GET['update'])) {
    if ($_GET['update'] == "success") { ?>
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
      <p>This section will display the following nortification.</p>

        <div class="w3-card-4" style="width:80%;">
          <header class="w3-container w3-black">
            <h4>Header</h4>
          </header>

          <div class="w3-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

          <footer class="w3-container w3-black">
            <h6>Footer</h6>
          </footer>
        </div>
     


    </div>
    <br>
  </div>
</div>