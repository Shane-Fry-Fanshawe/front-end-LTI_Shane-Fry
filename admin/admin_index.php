<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();

	if(isset($_GET['filter'])){
		$tbl = "tbl_ledc";

		$col = "movies_id";
		$col2 = "genre_id";
		$col3 = "genre_name";
		$filter = $_GET['filter'];
		$getLEDC = filterType($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
	}else{
		$tbl = "tbl_ledc";
		$getLEDC = getAll($tbl);
	}
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>LTI CMS - Home</title>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel="stylesheet" href="../css/foundation.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="../js/minified/TweenMax.min.js"></script>
</head>
<body class="admin_back">
	<header class="admin_header bebas">


	<div class="logo">
	<a href="admin_index.php"><img src="../images/logo.png" alt="my logo"></a>
		</div>

			<h1 class="">Welcome to your admin page</h1>


			<div class="row">
					<div class="columns small-12 lato">
						<div>
						<ul class="admin_nav">
							<li><a href="../index.php">Movies</a></li>
						<li><a href="admin_index.php">Home</a></li>
						<li><a href="admin_editall.php">Edit Movie</a></li>
						<li><a href="admin_addmovie.php">Add Movie</a></li>
						<li><a href="admin_createuser.php">Create User</a></li>
						<li><a href="admin_edituser.php">Edit User</a></li>
						<li><a href="admin_deleteuser.php">Fired</a></li>
						<li><a href="phpscripts/caller.php?caller_id=logout">Sign Out</a></li>
						</ul>
							</div>
				</div>
			</div>
		</header>



<div class="row">
	<div class="columns small-12 bebas">
			<?php echo "<h2 class=\"welcome_message\">Hi - {$_SESSION['user_name']} hope youre having a good day!</h2>"; ?>
	</div>
</div>



<?php


		$row = mysqli_fetch_array($getLEDC);
				echo "<div class=\"movie_container\"> <img class=\"movie_image\" src=\"images/{$row['ledc_img']}\" alt=\"{$row['ledc_title']}\">
					<h2 class=\"movie_text\">{$row['ledc_desc']}</h2>

					<br><br></div>";



	?>





	<script src="../js/vendor/jquery.js"></script>
	<script src="../js/vendor/what-input.js"></script>
	<script src="../js/vendor/foundation.js"></script>

</body>
</html>
