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
    $target1 = "images/".basename($_FILES['img1']['name']);
    $target2 = "images/".basename($_FILES['img2']['name']);
    $target3 = "images/".basename($_FILES['img3']['name']);

    $img1 = $_FILES['img1']['name'];
    $img2 = $_FILES['img2']['name'];
    $img3 = $_FILES['img3']['name'];

    if(empty($name) || empty($desc)){
        header("Location: ../services_add.php?notf=fieldrequires");
        exit();
    }
    else{
        $sql = "INSERT INTO service(service_name,service_desc,line1,line2,line3,line4,line5,line6,img1,img2,img3) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../services_add.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"sssssssssss",$name,$desc,$l1,$l2,$l3,$l4,$l5,$l6,$img1,$img2,$img3);
            
            mysqli_stmt_execute($stmt);
            if(move_uploaded_file($_FILES['tmp_name']['name'],$target1)){
                $msg = "Image uploaded successfully.";
            }
            else{
                $msg = "Image upload unsuccessfully.";
            }
            header("Location: ../services_add.php?notf=success");
            exit();
        }
    }

}
else{
    header("Location: ../services_add.php");
}

?>