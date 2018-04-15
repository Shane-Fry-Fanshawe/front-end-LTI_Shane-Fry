<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	//confirm_logged_in();
	$tbl = "tbl_user";
	$users = getAll($tbl);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>LTI CMS - Delete User</title>
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


	<h2 id="edit_user_title" class="bebas">DELETE USERS</h2>
	<?php
		while($row = mysqli_fetch_array($users)) {
			echo "<div class=\"delete columns small-6 medium-4\"> <p class=\"delete_name bebas\">{$row['user_fname']}</p><a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Delete User</a><br><br></div>";
		}
	?>



	<script src="../js/vendor/jquery.js"></script>
	<script src="../js/vendor/what-input.js"></script>
	<script src="../js/vendor/foundation.js"></script>
</html>
