<?php 
require('database.php');

if(isset($_POST['submit'])) {  
    
    $story1 = mysqli_real_escape_string($conn,$_POST['story1']);
    $url = mysqli_real_escape_string($conn,$_POST['url']);
    $desc = mysqli_real_escape_string($conn,$_POST['desc']);

    $update = mysqli_query($conn,"UPDATE about SET story1='$story1',story2='$story2',story3='$story3',youtubeURL='$url',youtubeDesc='$desc' WHERE id='1'");  

    header("Location: ../admin/about.php?update=success"); 
}

?>