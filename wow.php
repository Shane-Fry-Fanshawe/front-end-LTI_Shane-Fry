<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('admin/phpscripts/config.php');

	if(isset($_GET['filter'])){
		$tbl = "tbl_wow";

		$col = "movies_id";
		$col2 = "genre_id";
		$col3 = "genre_name";
		$filter = $_GET['filter'];
		$getLEDC = filterType($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
	}else{
		$tbl = "tbl_wow";
		$getWow = getAll($tbl);
	}
?>




<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="css/foundation.css">
  <script src="js/minified/TweenMax.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <title>LTI - WOW</title>
</head>
<body>
<h1 class="hidden">LEDC - WOW PAGE</h1>




<header class="lti_header bebas">
	<h2 class="hidden">Header</h2>

<div class="row">




  <div class="columns small-4">
<a href="index.php"><img class="header_logo" src="images/logo.png" alt="LTI Logo"></a>
  </div>

  <div class="navBar hide-for-medium">
    <div class="bar bar1"></div>
    <div class="bar bar2"></div>
    <div class="bar bar3"></div>
  </div>

  <div class="navList">
  <ul>
    <li><a href="what.php">WHAT</a></li>
    <li><a href="index.php">WHY</a></li>
    <li><a href="wow.php">WOW</a></li>
  </ul>
  </div>







  <div class="columns small-6 show-for-medium">
    <nav class="header_nav">
			<h2 class="hidden">Header Nav</h2>
            <img class="header_icon" src="images/social.png" alt="">
            <img class="header_icon" src="images/social.png" alt="">
      <ul>
        <li><a href="what.php">WHAT</a></li>
        <li><a href="index.php">WHY</a></li>
        <li><a href="wow.php">WOW</a></li>
      </ul>
    </nav>
  </div>

</div>


</header>


<section id="circles_section">
	<h2 class="hidden">Circles Section</h2>
  <div class="row circle_row">
    <div class="columns hide-for-medium small-10 small-centered">
    </div>
  </div>


  <div class="row">
    <div class="columns show-for-medium medium-4">
<a href="what.php"><div class="circle">
<p class="vertical-align circle_text bebas">WHAT</p>
</div></a>
    </div>
  <a href="index.php">  <div class="columns show-for-medium medium-4">
<div class="circle">
<p class="vertical-align circle_text bebas">WHY</p>
</div>
    </div></a>
  <a href="wow.php">  <div class="columns show-for-medium medium-4">
<div class="circle">
<p class="vertical-align circle_text bebas">WOW</p>
</div>
    </div></a>
  </div>


<div class="row">

  <div class="columns small-10 small-centered">
    <p class="londonText lato">LONDON TECH INDUSTRY</p>
  </div>

</div>





</section>







<section id="what_section">
	<h2 class="hidden">What Section</h2>

<div class="row">
  <div class="columns small-12 small-centered what_title_section">
    <h2 class="why_title bebas">WOW! THE OPPORTUNITIES ARE ENDLESS!</h2>
    <p class="why_desc lato">A wide variety of business development services, job opportunities as well as services itself here in London, Ontario.</p>
  </div>
    <?php
    if(!is_string($getWow)){
      while($row = mysqli_fetch_array($getWow)){
        echo "
          <div class=\"columns small-12 medium-4 what_section_box\">
            <img class=\"what_icon\" src=\"images/{$row['wow_img']}\" alt=\"{$row['wow_title']}\">
            <h3 class=\"what_section_title bebas\">{$row['wow_title']}</h3>
            <p class=\"what_section_desc lato\">{$row['wow_desc']}</p>
            <button class=\"read_more_button indutry_button\">Read More</button>
          </div>
        ";
      }
    }else{
      echo "<p class=\"error\">{$getWow}</p>";
    }
    	?>
</div>
</section>


<section id="what_info">
	<h2 class="hidden">what Info</h2>
  <div class="row">
<div class="columns small-12 what_info_container">

    <div class="what_text_section">
      <h3 class="what_text_title">NIGHTLIFE</h3>
      <p class="what_text_desc">The community of London Ontario provides web-based and in-person services connecting people to job and career opportunities.</p>
    </div>

    <div class="image">
          <img src="images/bar.jpg" alt="bar">
    </div>
</div>
<div class="columns small-12 what_info_container">

    <div class="what_text_section_odd">
      <h3 class="what_text_title">ADVENTURE</h3>
      <p class="what_text_desc">The community of London Ontario provides web-based and in-person services connecting people to job and career opportunities.</p>
    </div>

    <div class="image_odd">
          <img src="images/adventure.jpg" alt="pinic outside">
    </div>
</div>
<div class="columns small-12 what_info_container">

    <div class="what_text_section">
      <h3 class="what_text_title">DINING</h3>
      <p class="what_text_desc">Web-based databases that refines search <br> Atleast 14,000+ total businesses in London, Ontario.</p>
    </div>

    <div class="image">
          <img src="images/dining.jpg" alt="eating at a table">
    </div>
</div>
<div class="columns small-12 what_info_container">

    <div class="what_text_section_odd">
      <h3 class="what_text_title">EVENTS</h3>
      <p class="what_text_desc">Wide variety of business development services, job opportunities as well as services itself here to grow and expand in London, Ontario.</p>
    </div>

    <div class="image_odd">
          <img src="images/events.jpg" alt="girls at party">
    </div>
</div>


</div>
</section>


<section>
	<h2 class="hidden">Video</h2>
  <div class="row">

    <div class="columns small-12">
      <h2 class="video_title">Check For Yourself</h2>
      <video  class="what_video" controls poster="images/posterimage.jpg">
        <source src="videos/main.mp4" type="video/mp4">
          <source src="videos/main.webm" type="video/webm">
        <source src="videos/main.ovg" type="video/ogg">

        Your browser doesn't support video?!? that sucks.

      </video>
    </div>

  </div>
</section>




<footer class="lti_footer lato">
	      <h2 class="hidden">Footer</h2>

<div class="row">

  <div class="columns small-4">
<a href="index.php"><img class="footer_logo" src="images/footer_logo.png" alt="logo"></a>
<p class="copyright">© 2018 London Tech Industry</p>
  </div>

  <div class="columns small-8">
    <nav class="footer_nav ">
			      <h3 class="hidden">Footer Nav</h3>
      <ul>
        <li><a href="what.php">WHAT</a></li>
        <li><a href="index.php">WHY</a></li>
        <li><a href="wow.php">WOW</a></li>
        <li><a href="admin/admin_index.php">ADMIN</a></li>
      </ul>
    </nav>
  </div>

</div>


</footer>










<script src="js/main.js"></script>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
</body>


</html>
