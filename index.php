<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('admin/phpscripts/config.php');


	if(isset($_POST['name'])){

    $direct = "thankyou.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $street = $_POST['street'];
    $message = $_POST['message'];
    //echo $name;

    if($street === ""){
      //echo "sent mail";
      $sendMail = submitMessage($direct, $name, $email, $message);
    }
    /*else{
      echo "try again";
    } */
  }



	if(isset($_GET['filter'])){
		$tbl = "tbl_ledc";

		$col = "movies_id";
		$col2 = "genre_id";
		$col3 = "genre_name";
		$filter = $_GET['filter'];
		$getLEDC = filterType($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
	}else{
		$tbl = "tbl_why";
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




<section id="start_journey">
	<h2 class="hidden">Start Journey</h2>

<div class="row">
  <div class="columns small-12 small-centered start_journey_title">
    <h2 class="start_title bebas">WHY START YOUR JOURNEY HERE?</h2>
    <p class="start_desc lato">Come for business, stay for life.</p>
  </div>

  <div class="columns small-12 medium-6 start_journey_strong">
    <h3 class="strong_sub_title bebas">Strong network and community</h3>
    <p class="lato">London’s has a strong digital creative sector with over 300 companies employing more than 9,000 people - has been built on innovative local start-up ventures finding a niche market and growing into successful Canadian and global players like Autodata Solutions, Info-Tech Research Group and Big Blue Bubble. The arts have inherent value and make an enormous contribution to the quality of life and vibrancy of London. </p>
    <button class="read_more_button">Read More</button>
  </div>

  <div class="columns small-12 medium-6 start_journey_shovel">
    <h3 class="strong_sub_title bebas">Shovel ready lands</h3>
    <p class="lato">London offers truly shovel-ready, master-planned lands in a variety of sizes. These Class-A serviced lands are located next to highways 401 and 402 with easy access to three U.S. border crossings and an international airport. Innovation Park has already attracted multinationals like Hanwha and Dr. Oetker. Get access to world-class infrastructure and fast-tracked regulatory approval for your next investment in London, Ontario, Canada.</p>
    <button class="read_more_button">Read More</button>
  </div>

</div>
</section>




<section id="why_section">
	<h2 class="hidden">Why Info</h2>

<div class="row">
  <div class="columns small-12 small-centered why_title_section">
    <h2 class="why_title bebas">WHY THIS INDUSTRY</h2>
    <p class="why_desc lato">If Hanwha and Dr.Oetker can reach a global franchise commmunity by optomizing resources here in London, Ontario - what is stopping yourself?</p>
  </div>


  <?php

  if(!is_string($getLEDC)){
    while($row = mysqli_fetch_array($getLEDC)){
      echo "
      <div class=\"columns small-12 medium-4 why_container\">
        <img class=\"indutry_icon\" src=\"images/{$row['why_img']}\" alt=\"{$row['why_title']}\">
        <h3 class=\"industry_section_title bebas\">{$row['why_title']}</h3>
        <p class=\"industry_section_desc lato\">{$row['why_desc']}</p>
        <button class=\"read_more_button indutry_button\">Read More</button>
      </div>
      ";
    }
  }else{
    echo "<p class=\"error\">{$getLEDC}</p>";
  }




  	?>

</div>
</section>



<section id="network_partners">
	<h2 class="hidden">Jobs</h2>

<div class="row">
  <div class="columns small-12 small-centered why_title">
    <h2 class="bebas jobs">Why London? The Jobs!</h2>
		<p class="jobs_desc lato">Here is the long list of compaines that you could work for in the near future! Make sure to explore all the options as this is possibly your new future!</p>
  </div>

  <div class="columns small-12 medium-6 partner_box">
    	<img src="images/arcane.png" alt="arcane logo">
  </div>

  <div class="columns small-12 medium-6 partner_box">
    <img src="images/td.png" alt="arcane logo">
  </div>

  <div class="columns small-12 medium-6 partner_box">
    <img src="images/voices.png" alt="arcane logo">
  </div>

  <div class="columns small-12 medium-6 partner_box">
    <img src="images/digital.png" alt="arcane logo">
  </div>


</div>
</section>







<footer class="lti_footer lato">
	<h2 class="hidden">Footer</h2>

<div class="row">


	<form  method="post">
	  <div class="row">
	    <div class="columns small-8 large-4 small-push-2 large-push-2 contact_form_input">
	      <input id="stop_spam" name="street" type="text" size="21" maxlength="30" />
	        <input type="text" name="name" placeholder="Name...">
	    </div>
	    <div class="columns small-8 large-4 small-pull-2 large-pull-2 contact_form_input">
	        <input type="text" name="email" placeholder="Email...">
	    </div>
	  </div>

	  <div class="row">
	    <div class="columns small-8 large-8 small-centered contact_form_input"><input type="text" name="message" placeholder="Message..."></div>
	  </div>


	  <div class="row">
	    <div class="columns small-4 large-2 small-centered contact_submit">
	      <input type="submit" value="SUBMIT">
	    </div>
	  </div>
	  </form>




  <div class="columns small-4">
<a href="index.php"><img class="footer_logo" src="images/footer_logo.png" alt="logo"></a>
<p class="copyright">© 2018 London Tech Industry</p>
  </div>

  <div class="columns small-8">
    <nav class="footer_nav ">
			<h2 class="hidden">Footer Nav</h2>
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
