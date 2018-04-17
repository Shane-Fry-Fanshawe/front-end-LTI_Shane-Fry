<?php
	function addMovie($title, $img, $desc) {
		include("connect.php");
		if($_FILES['img']['type'] == "image/jpeg" || $_FILES['img']['type'] == "image/jpg" ){
			$target = "../images/{$img['name']}";
			 if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){

			 	$orig = "../images/{$img['name']}";
			 	$th_copy = "../images/TH_{$img['name']}";
			 	if(!copy($orig, $th_copy)){
			 		echo "Failed to copy";
			 	}

			 	//$size = getimagesize($orig);
			 	//echo $size[1];
			 	//$image = $img['name'];
			 	$addstring = "INSERT INTO tbl_movies VALUES(NULL, '{$img['name']}','{$title}','{$year}','{$runtime}','{$storyline}','{$trailer}','{$release}')";
			 	//echo $addstring;
			 	$addresult = mysqli_query($link, $addstring);
			 	if($addresult){
			 		$qstring = "SELECT * FROM tbl_movies ORDER BY movies_ID DESC LIMIT 1";
			 		$lastmovie = mysqli_query($link, $qstring);
			 		$row = mysqli_fetch_array($lastmovie);
			 		$lastID = $row['movies_id'];
			 		//echo $lastID;
			 		$genstring = "INSERT INTO tbl_mov_genre VALUES(NULL, {$lastID}, {$genre})";
			 		$genresult = mysqli_query($link, $genstring);
			 		redirect_to("admin_index.php");
			 	}
			 }
		}
		mysqli_close($link);
	}
?>
