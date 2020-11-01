<?php 
    if(isset($_POST['login-submmit'])){
        require 'database.php';

        $mailuid = $_POST[''];
        $password = $_POST[''];
    }
    else{
        header("Location: ../admin/dasjnpard.php");
        exit();
    }
?>