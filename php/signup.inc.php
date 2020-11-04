<?php

  if(isset($_POST['signUp-button'])) {
    
    require('database.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['password2'];

    if(empty($email) || empty($password) || empty($passwordRepeat)){
        //code
        header("Location:../register.php?error=emptyfields&mail=".$email);
        exit();
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("Location:../register.php?error=invalidmail&mail=".$email);
        exit();
    
    }
    else if($password !== $passwordRepeat){
        header("Location: ../register.php?error=passwordcheck&mail=".$email);
        exit();
    }
    else{
        $sql = "SELECT email FROM user WHERE email=?";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../register.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Location: ../register.php?error=usertaken&mail=".$email);
                exit();
            }
            else{
                $sql = "INSERT INTO user(email,password) VALUES (?,?)";
                $stmt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: ../register.php?error=sqlerror");
                    exit();
                }
                else{
                    $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
                    
                    mysqli_stmt_bind_param($stmt,"ss",$email,$hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../register.php?signup=success");
                    exit();
                }
            }
        }
    
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    

  } 
  else{
      header("Location: ../register.php");
  }

?>