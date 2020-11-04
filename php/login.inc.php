<?php 
    if(isset($_POST['login-submit'])){
        require 'database.php';

        $uid = $_POST['email'];
        $password = $_POST['password'];

        if(empty($uid) || empty($password)){
            header("Location:../login.php?error=emptyfields&uid=".$uid);
            exit();
        }
        else{
            $sql = "SELECT * FROM user WHERE email=? ";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../login.php?error=sqlerror");
            exit();
            }
            else{

                mysqli_stmt_bind_param($stmt,"s",$uid);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result)){
                    $pwdCheck = password_verify($password,$row['password']);

                    if($pwdCheck == false){
                        header("Location:../login.php?error=wrongpwd");
                     exit();
                    }
                    else if($pwdCheck == true){
                        session_start();
                        $_SESSION['userId'] = $row['id'];
                        $_SESSION['userEmail'] = $row['email'];
                        header("Location:../login.php?login=success");
                     exit();
           
                    }
                   
                }
                else{
                    header("Location: ../login.php?error=nouser");
                    exit();
                }
            }
        }
    }
    else{
        header("Location: ../login.php");
        exit();
    }
?>