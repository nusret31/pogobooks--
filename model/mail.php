<?php

  if (isset($_REQUEST['email']))  {


  $admin_email = "pogonicialexandru@yahoo.com";

  $email = $_REQUEST['email'];

  $subject = $_REQUEST['subject'];

  $comment = $_REQUEST['comment'];
  
  
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  echo "<br>";
  echo "Thank you for contacting us!";
  header( "refresh:2; url=../index.php" );
  }
  


?>
