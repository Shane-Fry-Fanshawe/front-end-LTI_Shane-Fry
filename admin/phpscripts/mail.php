<?php

//should be a diff file, short class time
//This is a redirect



function submitMessage($direct, $name, $email, $message){ //the $direct, $name etc keep in order as the same as the contact format it goes by the order not name

//$direct = $direct."?name={$name}"; // This will put the persons name on the url, so in the the thank you page


  //string to hold where you are sending it (my email on webhosting) Where its going TO!


  $to = "shane@shanefry.com";
  $subject = "Message from user from hosting";
  $extra = "Reply to: " .$email;
  $msg = "Name:" .$name. "\n\nEmail:" .$email. "\n\nMessage:" .$message;

  mail($to, $subject, $msg, $extra);

  /*Was trying to do a new page, and display a thank you then have $name carry over but I couldnt get it to so I commented it out left the thank you page for now.*/

  //header("Location: https://www.shanefry.com/thankyou.php", true, 301);
  header("Location: thankyou.php", true, 301);
  exit();

}
 ?>
