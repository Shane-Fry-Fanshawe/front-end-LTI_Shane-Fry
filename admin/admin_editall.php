<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');

	$tbl="tbl_why";
	$tblWow="tbl_wow";
	$genQuery = getAll($tbl);
	$genQueryWow = getAll($tblWow);

	$value_id = 1; //placeholder so there is no errors when blank

	if(isset($_POST['submit'])) {

		$value_id = $_POST['editList'];
	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>LTI CMS - Edit All</title>
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



<div class="row">
	<div class="columns small-12 medium-6">
	<h2 class="bebas edit_title">Why Page:</h2>
		<form action="admin_editall.php" method="post" enctype="multipart/form-data">
<label>Select</label>
			<select name="editList">
				<option value="">Select A Section</option>
				<?php
				while($row = mysqli_fetch_array($genQuery)){
					echo "<option value=\"{$row['why_id']}\">{$row['why_title']}</option>";

				}
				?>
			</select><br><br><br>
			<input class="submit" type="submit" name="submit" value="Select Section">
		</form>


	<?php
		echo single_edit("tbl_why","why_id",$value_id); //The number is the ID of the movie I need to get a way to change this on a click or soemthing
			//phpinfo();
?>
</div>





<div class="columns small-12 medium-6">
	<h2 class="bebas edit_title">Wow Page:</h2>
	<form action="admin_editall.php" method="post" enctype="multipart/form-data">
<label>Select</label>
		<select name="editList">
			<option value="">Select A Section</option>
			<?php
			while($row = mysqli_fetch_array($genQueryWow)){
				echo "<option value=\"{$row['wow_id']}\">{$row['wow_title']}</option>";

			}
			?>
		</select><br><br><br>
		<input class="submit" type="submit" name="submit" value="Select Section">
	</form>

<?php
	echo single_edit("tbl_wow","wow_id",$value_id); //The number is the ID of the movie I need to get a way to change this on a click or soemthing
		//phpinfo();
?>
</div>











</div>









</div>



<script src="../js/vendor/jquery.js"></script>
<script src="../js/vendor/what-input.js"></script>
<script src="../js/vendor/foundation.js"></script>
</body>
</html>
