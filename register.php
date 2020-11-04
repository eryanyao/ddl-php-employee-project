
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="assets/login/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--=============================================-->
	<script src="https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.23.0/firebase-auth.js"></script>
	<script src="assets/js/firebase_auth.js"></script>
	
	<script src="assets/js/sweetalert.min.js"></script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/login/images/bg-01.jpg');">
			
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				
					<span class="login100-form-title p-b-53">
						Register
					</span>
				
					<form action="php/signup.inc.php" method="POST">
					<?php
						if(isset($_GET['error'])){
							if($_GET['error'] == "emptyfields"){
							echo '<p class="w3-text-red">*Fill in all fields.</p>';
							}
							else if($_GET['error'] == "invaliduidmail"){
							echo '<p class="w3-text-red">*Invalid username and email.</p>';
							}
							else if($_GET['error'] == "invaliduid"){
							echo '<p class="w3-text-red">*Invalid username.</p>';
							}
							else if($_GET['error'] == "invalidmail"){
							echo '<p class="w3-text-red">*Invalid email.</p>';
							}
							else if($_GET['error'] == "passwordcheck"){
							echo '<p class="w3-text-red">*Your passwords do not match.</p>';
							}
							else if($_GET['error'] == "usertaken"){
							echo '<p class="w3-text-red">*Account is already taken.</p>';
							}
							
						} 
						
						
						?>
						<?php 
						if(isset($_GET['signup'])){
						if($_GET["signup"] == "success"){
								?>
								<script>
								swal({
								  title: "Register Successfully",
								  text: "Account Created Successfully. Please Sign In.",
								  icon: "success",
								  button: "OK",
								}).then(function(){
									window.location.href = "login.php";
								})
							  </script>
							  <?php 
							  }
							}
							  ?>
							  
						<div class="p-t-31 p-b-9">
							<span class="txt1">
								Email
							</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Email is required" id="emailRequire">	
							<input class="input100" type="text" name="email" id="email"   >
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

						<div class="p-t-13 p-b-9">
							<span class="txt1">
								Retye Password
							</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Password is required">
							<input class="input100" type="password" name="password2"   >
							<span class="focus-input100"></span>
						</div>

						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" 
							type="submit" name="signUp-button"  id="signUp" >
								Sign Up
							</button>
						</div>
					</form>
					

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Is a member?
						</span>

						<a href="login.php" class="txt2 bo1">
							Sign in now
						</a>
						<br>
						
						<br><br>
						<a href="index.php" class="txt3 bo1">
							Back to Home Page
						</a>
					</div>
				
			</div>
		</div>
	</div>
	



<!--===============================================================================================-->
	<script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/login/vendor/animsition/js/animsition.min.js"></script>
	<script src="assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/login/vendor/select2/select2.min.js"></script>
	<script src="assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="assets/login/vendor/countdowntime/countdowntime.js"></script>
	<script src="assets/login/js/main.js"></script>
	
</body>
</html>