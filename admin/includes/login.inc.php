<?php 
    if(isset($_POST['login-submit'])){
        require 'database.php';

        $uid = $_POST['username'];
        $password = $_POST['password'];

        if(empty($uid) || empty($password)){
            header("Location:../login.php?error=emptyfields&uid=".$uid);
            exit();
        }
        else{
            $sql = "SELECT * FROM admin WHERE uidAdmin=? OR emailAdmin=?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../login.php?error=sqlerror");
            exit();
            }
            else{

                mysqli_stmt_bind_param($stmt,"ss",$uid,$uid);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result)){
                    $pwdCheck = password_verify($password,$row['pwdAdmin']);

                    if($pwdCheck == false){
                        header("Location:../login.php?error=wrongpwd");
                     exit();
                    }
                    else if($pwdCheck == true){
                        session_start();
                        $_SESSION['userId'] = $row['idAdmin'];
                        $_SESSION['userUId'] = $row['uidAdmin'];
                        $_SESSION['userEmail'] = $row['emailAdmin'];
                       ?>
                       <script>
                           swal({
                            title: "Good job!",
                            text: "You clicked the button!",
                            icon: "success",
                            button: true,
                            }).then((willdelete)=>{
                                <?php  header("Location: ../dashboard.php?login=success");
                        exit(); ?>
                            });
                       </script>

                       <?php
                       

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