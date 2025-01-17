
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
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
	<!--====================================================-->
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
						Sign In With
					</span>

					<a href="#" class="btn-google m-b-20" onclick="google()"style="width:100%;" >
						<img src="assets/login/images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a>
					<?php 
						if(isset($_GET['error'])){?>
							<script>
							  swal({
								title: "Login Unsuccesffuly",
								text: "Please try again.",
								icon: "error",
								button: "OK!",
							  });
							</script>
						  <?php

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
					<?php 
						if(isset($_GET['login'])){
						if($_GET["login"] == "success"){
								?>
								<script>
								swal({
								  title: "Login Successfully",
								  text: "Welcome!",
								  icon: "success",
								  button: "OK",
								}).then(function(){
									window.location.href = "acc/home.php";
								})
							  </script>
							  <?php 
							  }
							}
							  ?>

					<form action="./php/login.inc.php" method="POST">
						<div class="p-t-31 p-b-9">
							<span class="txt1">
								Email
							</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Email is required">
							<input class="input100" type="text" name="email" required>
							<span class="focus-input100"></span>
						</div>
						
						<div class="p-t-13 p-b-9">
							<span class="txt1">
								Password
							</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Password is required">
							<input class="input100" type="password" name="password" required>
							<span class="focus-input100"></span>
						</div>

						<div class="container-login100-form-btn m-t-17">
							<button type="submit" name="login-submit" class="login100-form-btn">
								Sign In
							</button>
						</div>
					</form>
					

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="register.php" class="txt2 bo1">
							Sign up now
						</a><br>
						<span class="txt2">
							Forget password?
						</span>

						<a href="forget.html" class="txt2 bo1">
							Reset now
						</a>
						<br><br>
						<a href="index.php" class="txt2 bo1">
							Back to Home Page
						</a>
					</div>
				
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/js/main.js"></script>

</body>
</html>