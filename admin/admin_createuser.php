<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();
	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$userlvl = $_POST['userlvl'];
		if(empty($userlvl)){
			$message = "Please select a user level.";
		}else{
			$result = createUser($fname, $username, $password, $email, $userlvl);
			$message = $result;
		}
	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>LTI CMS - Create User</title>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel="stylesheet" href="../css/foundation.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="../js/minified/TweenMax.min.js"></script>
</head>
<body>

	<header class="admin_header bebas">


	<div class="logo">
	<a href="admin_index.php"><img src="../images/logo.png" alt="my logo"></a>
		</div>

			<h1 class="">Welcome to your admin page</h1>


			<div class="row">
					<div class="columns small-12 lato">
						<div>
						<ul class="admin_nav">
							<li><a href="../index.php">LTI</a></li>
						<li><a href="admin_index.php">Home</a></li>
						<li><a href="admin_editall.php">Edit Pages</a></li>
						<li><a href="admin_createuser.php">Create User</a></li>
						<li><a href="admin_edituser.php">Edit User</a></li>
						<li><a href="admin_deleteuser.php">Fired</a></li>
						<li><a href="phpscripts/caller.php?caller_id=logout">Sign Out</a></li>
						</ul>
							</div>
				</div>
			</div>
		</header>

	<h2 id="edit_user_title" class="bebas">CREATE USER </h2>
	<?php if(!empty($message)){echo $message;} ?>
	<div class="row">
		<div class="columns small-10 small-centered">
	<form action="admin_createuser.php" method="post">
	<label>First Name:</label>
	<input class="user_info" type="text" name="fname" value="	<?php if(!empty($fname)){echo $fname;} ?>
"><br><br>

	<label>Username:</label>
	<input class="user_info" type="text" name="username" value="	<?php if(!empty($username)){echo $username;} ?>
"><br><br>

	<label>Password:</label>
	<input class="user_info" type="text" name="password" value="	<?php if(!empty($password)){echo $password;} ?>
"><br><br>

	<label>Email:</label>
	<input class="user_info" type="text" name="email" value="	<?php if(!empty($email)){echo $email;} ?>
"><br><br>

	<label >User Level:</label>
	<select name="userlvl">
		<option value="">Please select a user level</option>
		<option value="2">Web Admin</option>
		<option value="1">Web Master</option>
	</select><br><br>

	<input class="submit" type="submit" name="submit" value="Create User">
	</form>
			</div>
</div>

	<script src="../js/vendor/jquery.js"></script>
	<script src="../js/vendor/what-input.js"></script>
	<script src="../js/vendor/foundation.js"></script>
</body>
</html>
