<?php 
session_start();
include("connection_db.php");

if(isset($_POST["btn"]))
{ 		
	$un = $_POST["name"];
	$pwd = $_POST["pass"];
	$select = "select * from admin where User_Name = '".$un."'";
	$query = mysqli_query($connection,$select);
	$row = mysqli_fetch_array($query);
	if($row["User_Name"] == $un && $row["Password"] == $pwd)
	{
		$_SESSION["user"] = $row["User_Name"];
		$_SESSION["img"] = $row["Image"];
		$_SESSION["pwd"] = $row["Password"];
		header("Location:Dashboard.php");
	}
	else
	{
		$result = "Invalid UserName and Password";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>CTCD Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="style/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="style/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="style/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="style/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action="Login.php" method="post">
					<span class="login100-form-title p-b-33">
						CTCD Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="name" placeholder="User Name">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" name="btn">
							Sign in
						</button>
					</div>					
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="style/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="style/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="style/login/vendor/bootstrap/js/popper.js"></script>
	<script src="style/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="style/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="style/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="style/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="style/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="style/login/js/main.js"></script>

</body>
</html>