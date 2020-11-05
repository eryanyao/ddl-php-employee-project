
 <?php 
 
 session_start();
 session_unset();
 session_destroy();
 setcookie("email", "");
 header("Location: ../index.php");
 ?>

