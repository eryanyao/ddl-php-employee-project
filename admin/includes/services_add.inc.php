<?php
$status = $statusMsg = '';
if(isset($_POST['save-submit'])){

    require('database.php');

    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $l1 = $_POST['l1'];
    $l2 = $_POST['l2'];
    $l3 = $_POST['l3'];
    $l4 = $_POST['l4'];
    $l5 = $_POST['l5'];
    $l6 = $_POST['l6'];
    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];



    if(empty($name) || empty($desc)){
        header("Location: ../addServices.php?notf=fieldrequires");
        exit();
    }
    else{
        $sql = "INSERT INTO service(service_name,service_desc,line1,line2,line3,line4,line5,line6,img1,img2,img3) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../addServices.php?error=sqlerror");
            exit();
        }
        else{
            
            mysqli_stmt_bind_param($stmt,"sssssssssss",$name,$desc,$l1,$l2,$l3,$l4,$l5,$l6,$img1,$img2,$img3);
            mysqli_stmt_execute($stmt);
            header("Location: ../addServices.php?notf=success");
            exit();
        }
    }

}
else{
    header("Location: ../addServices.php");
}

?>