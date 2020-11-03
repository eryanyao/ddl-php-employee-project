<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    
    <title>Admin Login</title>
    <link rel="icon" type="image/png" href="../assets/login/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="../assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/login/css/main.css">
</head>
<body>
<div class="limiter">
		<div class="container-login100" style="background-image: url('../assets/login/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="includes/login.inc.php">
					<span class="login100-form-title p-b-53">
						Admin Login Page
					</span>

					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username/Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
						
     		
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit" name="login-submit">
							Sign In
						</button>
					</div>
					<?php 
						if(isset($_GET['error'])){
							if($_GET['error'] == "emptyfields"){
								echo '<h5><small id="pass1Require" class="form-text txt1 text-danger" style="display: block;" >*All Field are Require.</small></h5>';
							}
							else if($_GET['error'] == "wrongpwd" ||$_GET['error'] == "nouser" ){
								echo '
								<h5><small id="pass1Require" class="form-text txt1 text-danger" style="display: block;" >*Please enter valid username and password.</small>
								</h5>';
							}
						}
					?>

					<div class="w-full text-center p-t-55">
						<a href="../index.php" class="txt2 bo1">
							Back to Home Page
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
<script src="../assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../assets/login/vendor/animsition/js/animsition.min.js"></script>
	<script src="../assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="../assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/login/vendor/select2/select2.min.js"></script>
	<script src="../assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../assets/login/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="../assets/login/vendor/countdowntime/countdowntime.js"></script>
	<script src="../assets/login/js/main.js"></script>
</body>
</html>