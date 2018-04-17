<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);

	require_once('phpscripts/config.php');

	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== "") {
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "*Please fill in the required fields*";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>LTI CMS - Portal Login</title>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel="stylesheet" href="../css/foundation.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="../js/minified/TweenMax.min.js"></script>
</head>
<body class="admin_body">



	<div class="row">
		<div class="columns small-10 small-centered">

	<h1 class="welcome_admin bebas">Welcome - Please Log in</h1>
	<img class="welcome_logo" src="images/logo.png" alt="lti logo">
	<?php if(!empty($message)){echo $message;} ?>
	<form class="lato" action="admin_login.php" method="post">
		<label>Username:</label>
		<input type="text" name="username" value="">
		<br>
		<label>Password:</label>
		<input type="text" name="password" value="">
		<br>
		<input class="submit" type="submit" name="submit" value="Log In">
	</form>
		</div>
</div>






<script src="../js/vendor/jquery.js"></script>
<script src="../js/vendor/what-input.js"></script>
<script src="../js/vendor/foundation.js"></script>
</body>
</html>
