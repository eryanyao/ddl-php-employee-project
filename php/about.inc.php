<?php 
require('database.php');
$sql = "SELECT * FROM about";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query); 

$story1 = $data['story1'];
$story2 = $data['story2'];
$story3 = $data['story3'];
$url = $data['youtubeURL'];
$desc = $data['youtubeDesc'];

if(isset($_POST['submit'])) {  
    
    $story1 = mysqli_real_escape_string($conn,$_POST['story1']);
    $story2 = mysqli_real_escape_string($conn,$_POST['story2']);
    $story3 = mysqli_real_escape_string($conn,$_POST['story3']);
    $url = mysqli_real_escape_string($conn,$_POST['url']);
    $desc = mysqli_real_escape_string($conn,$_POST['desc']);

    $update = mysqli_query($conn,"UPDATE about SET story1='$story1',story2='$story2',story3='$story3',youtubeURL='$url',youtubeDesc='$desc' WHERE id='1'");  

    header("Location: ../admin/about.php?update=success"); 
}

?>