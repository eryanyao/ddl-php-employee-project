<?php 
require('database.php');
$sql = "SELECT * FROM contact";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

$location = $data['location'];
$phone = $data['phone'];
$email = $data['email'];

if(isset($_POST['update'])){
  
    
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $location =mysqli_real_escape_string($conn,$_POST['location']);
    $phone =mysqli_real_escape_string($conn,$_POST['phone']);

    $sql = mysqli_query($conn, "UPDATE contact SET email='$email', location='$location', phone='$phone' WHERE id='1'");
    header("Location: ../admin/contact.php?update=success");
  
}
  
  
?>