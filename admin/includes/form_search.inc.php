<?php 

if (isset($_POST['search-submit'])) {
    $enquiry_id = $_POST['enquiry_id'];

    if (empty($enquiry_id)) {
      header("Location: ../form_all.php?error=emptyfields&status=all");
      exit();
    } else {
      header("Location: ../form_all.php?status=search&id=".$enquiry_id);
      exit();
    }
  }
else{
    header("Location: ../form_all.php?status=all");
      exit();
}
?>