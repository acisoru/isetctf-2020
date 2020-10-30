<?php
include 'config.php';

if(!isset($_POST['submit'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit" name="submit">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

<?php
} else {
	$userdata = null;
	$username = mysql_escape_string($_POST['username']);
	$password = md5($_POST['password']);
	$sql = "SELECT login FROM users WHERE login = '$username' AND pass = '$password'";
	$r = mysql_query($sql);
	if (mysql_num_rows($r)) {
	   $r = mysql_query("SELECT * FROM users WHERE login = '$username'");
	   $userdata = mysql_fetch_array($r);


	   echo "
		   
		   <!DOCTYPE html>
		   <html lang=\"en\">
		   <head>
			   <title>Login</title>
			   <meta charset=\"UTF-8\">
			   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
		   <!--===============================================================================================-->	
			   <link rel=\"icon\" type=\"image/png\" href=\"images/icons/favicon.ico\"/>
		   <!--===============================================================================================-->
			   <link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/bootstrap/css/bootstrap.min.css\">
		   <!--===============================================================================================-->
			   <link rel=\"stylesheet\" type=\"text/css\" href=\"fonts/font-awesome-4.7.0/css/font-awesome.min.css\">
		   <!--===============================================================================================-->
			   <link rel=\"stylesheet\" type=\"text/css\" href=\"fonts/Linearicons-Free-v1.0.0/icon-font.min.css\">
		   <!--===============================================================================================-->
			   <link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/animate/animate.css\">
		   <!--===============================================================================================-->	
			   <link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/css-hamburgers/hamburgers.min.css\">
		   <!--===============================================================================================-->
			   <link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/animsition/css/animsition.min.css\">
		   <!--===============================================================================================-->
			   <link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/select2/select2.min.css\">
		   <!--===============================================================================================-->	
			   <link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/daterangepicker/daterangepicker.css\">
		   <!--===============================================================================================-->
			   <link rel=\"stylesheet\" type=\"text/css\" href=\"css/util.css\">
			   <link rel=\"stylesheet\" type=\"text/css\" href=\"css/main.css\">
		   <!--===============================================================================================-->
		   </head>
		   <body>
			   
			   <div class=\"limiter\">
				   <div class=\"container-login100\" style=\"background-image: url('images/bg-01.jpg');\">
						   <span class=\"login100-form-title p-b-41\">
						   <h1>Hello, ".$userdata["status"];
						   if ($username=='root') {  echo ",your flag is iset{K0LUmn_TRUNc4t10N_1z_4W350m3}</h1>
		   
						   </span>
				   </div>
			   </div>


		   

			   <div id=\"dropDownSelect1\"></div>
			   
		   <!--===============================================================================================-->
			   <script src=\"vendor/jquery/jquery-3.2.1.min.js\"></script>
		   <!--===============================================================================================-->
			   <script src=\"vendor/animsition/js/animsition.min.js\"></script>
		   <!--===============================================================================================-->
			   <script src=\"vendor/bootstrap/js/popper.js\"></script>
			   <script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>
		   <!--===============================================================================================-->
			   <script src=\"vendor/select2/select2.min.js\"></script>
		   <!--===============================================================================================-->
			   <script src=\"vendor/daterangepicker/moment.min.js\"></script>
			   <script src=\"vendor/daterangepicker/daterangepicker.js\"></script>
		   <!--===============================================================================================-->
			   <script src=\"vendor/countdowntime/countdowntime.js\"></script>
		   <!--===============================================================================================-->
			   <script src=\"js/main.js\"></script>
		   
		   </body>
		   </html>
		 
		 
		 
		 
		   ";   }
		   


	} else {
		die("
		
<!DOCTYPE html>
<html lang=\"en\">
<head>
	<title>Login</title>
	<meta charset=\"UTF-8\">
	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!--===============================================================================================-->	
	<link rel=\"icon\" type=\"image/png\" href=\"images/icons/favicon.ico\"/>
<!--===============================================================================================-->
	<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/bootstrap/css/bootstrap.min.css\">
<!--===============================================================================================-->
	<link rel=\"stylesheet\" type=\"text/css\" href=\"fonts/font-awesome-4.7.0/css/font-awesome.min.css\">
<!--===============================================================================================-->
	<link rel=\"stylesheet\" type=\"text/css\" href=\"fonts/Linearicons-Free-v1.0.0/icon-font.min.css\">
<!--===============================================================================================-->
	<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/animate/animate.css\">
<!--===============================================================================================-->	
	<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/css-hamburgers/hamburgers.min.css\">
<!--===============================================================================================-->
	<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/animsition/css/animsition.min.css\">
<!--===============================================================================================-->
	<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/select2/select2.min.css\">
<!--===============================================================================================-->	
	<link rel=\"stylesheet\" type=\"text/css\" href=\"vendor/daterangepicker/daterangepicker.css\">
<!--===============================================================================================-->
	<link rel=\"stylesheet\" type=\"text/css\" href=\"css/util.css\">
	<link rel=\"stylesheet\" type=\"text/css\" href=\"css/main.css\">
<!--===============================================================================================-->
</head>
<body>
	
	<div class=\"limiter\">
		<div class=\"container-login100\" style=\"background-image: url('images/bg-01.jpg');\">
				<span class=\"login100-form-title p-b-41\">
                <h1>Login error!</h1>

                </span>
		</div>
	</div>
	

	<div id=\"dropDownSelect1\"></div>
	
<!--===============================================================================================-->
	<script src=\"vendor/jquery/jquery-3.2.1.min.js\"></script>
<!--===============================================================================================-->
	<script src=\"vendor/animsition/js/animsition.min.js\"></script>
<!--===============================================================================================-->
	<script src=\"vendor/bootstrap/js/popper.js\"></script>
	<script src=\"vendor/bootstrap/js/bootstrap.min.js\"></script>
<!--===============================================================================================-->
	<script src=\"vendor/select2/select2.min.js\"></script>
<!--===============================================================================================-->
	<script src=\"vendor/daterangepicker/moment.min.js\"></script>
	<script src=\"vendor/daterangepicker/daterangepicker.js\"></script>
<!--===============================================================================================-->
	<script src=\"vendor/countdowntime/countdowntime.js\"></script>
<!--===============================================================================================-->
	<script src=\"js/main.js\"></script>

</body>
</html>
		
		
		");
	}
}
?>
