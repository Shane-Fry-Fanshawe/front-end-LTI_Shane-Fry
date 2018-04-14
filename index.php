<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('admin/phpscripts/config.php');

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



<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="css/foundation.css">
  <script src="js/minified/TweenMax.min.js"></script>
  <title>Home</title>
</head>
<body>
<h1 class="hidden">LEDC - WHY PAGE</h1>




<header class="lti_header bebas">

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

<?php


		$row = mysqli_fetch_array($getLEDC);
				echo "<div class=\"movie_container\"> <img class=\"movie_image\" src=\"images/{$row['ledc_img']}\" alt=\"{$row['ledc_title']}\">
					<h2 class=\"movie_text\">{$row['ledc_desc']}</h2>

					<br><br></div>";



	?>




<section id="start_journey">

<div class="row">
  <div class="columns small-12 small-centered start_journey_title">
    <h2 class="start_title">WHY START YOUR JOURNEY HERE?</h2>
    <p class="start_desc">Come for business, stay for life.</p>
  </div>

  <div class="columns small-12 medium-6 start_journey_strong">
    <h3 class="strong_sub_title">Strong network and community</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis.</p>
    <button class="read_more_button">Read More</button>
  </div>

  <div class="columns small-12 medium-6 start_journey_shovel">
    <h3 class="strong_sub_title">Shovel ready lands</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis.</p>
    <button class="read_more_button">Read More</button>
  </div>

</div>
</section>




<section id="why_section">

<div class="row">
  <div class="columns small-12 small-centered why_title_section">
    <h2 class="why_title">WHY THIS INDUSTRY</h2>
    <p class="why_desc">If Hanwha and Dr.Oetker can reach a global franchise commmunity by optomizing resources here in London, Ontario - what is stopping yourself?</p>
  </div>

  <div class="columns small-12 medium-4 opportunity">
    <img class="indutry_icon" src="images/opp_icon.png" alt="light bulb icon">
    <h3 class="industry_section_title">Opportunity</h3>
    <p class="industry_section_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis.</p>
    <button class="read_more_button indutry_button">Read More</button>
  </div>

  <div class="columns small-12 medium-4 growth">
    <img class="indutry_icon" src="images/growth_icon.png" alt="increase chart icon">
    <h3 class="industry_section_title">Growth</h3>
    <p class="industry_section_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis.</p>
    <button class="read_more_button indutry_button">Read More</button>
  </div>

  <div class="columns small-12 medium-4 success">
    <img class="indutry_icon" src="images/success_icon.png" alt="checkmark">
    <h3 class="industry_section_title">Success</h3>
    <p class="industry_section_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis.</p>
    <button class="read_more_button indutry_button">Read More</button>
  </div>

</div>
</section>



<section id="network_partners">

<div class="row">
  <div class="columns small-12 small-centered why_title boxHelper">
    <h2>Enterpreneur Support Network Partners</h2>
  </div>

  <div class="columns small-12 medium-6 partner_box boxHelper">
    opp
  </div>

  <div class="columns small-12 medium-6 partner_box boxHelper">
    Shovel Ready Lands
  </div>

  <div class="columns small-12 medium-6 partner_box boxHelper">
    Shovel Ready Lands
  </div>

  <div class="columns small-12 medium-6 partner_box boxHelper">
    opp
  </div>

  <div class="columns small-12 medium-6 partner_box boxHelper">
    Shovel Ready Lands
  </div>

  <div class="columns small-12 medium-6 partner_box boxHelper">
    Shovel Ready Lands
  </div>

</div>
</section>







<footer class="lti_footer lato">

<div class="row">

  <div class="columns small-4">
<a href="index.php"><img class="footer_logo" src="images/footer_logo.png" alt="logo"></a>
<p class="copyright">© 2018 London Tech Industry</p>
  </div>

  <div class="columns small-8">
    <nav class="footer_nav ">
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
