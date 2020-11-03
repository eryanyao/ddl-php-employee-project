<?php 
$var = $_GET["id"];
require('database.php');
$sql = "SELECT * FROM service WHERE service_id=".$var;
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

$title = $data['service_name'];
$desc = $data['service_desc'];
$line1 = $data['line1'];
$line2 = $data['line2'];
$line3 = $data['line3'];
$line4 = $data['line4'];
$line5 = $data['line5'];
$line6 = $data['line6'];
$img1 = $data['img1'];
$img2 = $data['img2'];
$img3 = $data['img3'];

?>