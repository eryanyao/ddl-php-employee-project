<?php 


if(isset($_POST['add-submit'])) {  
    require('database.php');

    $title = $_POST['title'];
    $desc = $_POST['desc'];
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $date = date("d F Y h:i:sa");

    $sql = "INSERT INTO norti(title,description,date) VALUES (?,?,?)";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../norti.php?error=sqlerror");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"sss",$title,$desc,$date);
        
        mysqli_stmt_execute($stmt);
       
        header("Location: ../norti.php?update=success");
        exit();
    }
}
else{
    header("Location: ../norti.php");
}

?>