
<html>

<head>

<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">


</head>

<body>
	
     <div id="login"> 

 <?php 
    include '../model/welcomediv.php';  
 ?>
  
  </div>


 <div id="logo">

         <h2><a href="../index.php">Pogobooks++</a></h2>

     </div>


<?php

include '../model/sendorder.php';  

echo" <div id=\"order\">";

echo '<span style=\"font-size:17; font-weight:bold;\"> Name: </span>'; echo $name;
  echo'<br>';
  echo '<span style=\"font-size:17; font-weight:bold;\"> Email: </span>'; echo $email;
  echo'<br>';
   echo '<span style=\"font-size:17; font-weight:bold;\"> City: </span>'; echo $city;
  echo'<br>';
  echo '<span style=\"font-size:17; font-weight:bold;\"> Address: </span>'; echo $address;
  echo'<br>';
   echo '<span style=\"font-size:17; font-weight:bold;\"> Zip: </span>'; echo $zip;
  echo'<br>';

 echo '<span style=\"font-size:17; font-weight:bold;\"> Country: </span>'; echo $country;
  echo'<br>';

    echo '<span style=\"font-size:17; font-weight:bold;\"> Shipping: </span>'; echo $ship;
    echo '<br>';
    echo '<span style=\"font-size:17; font-weight:bold;\"> Payment: </span>'; echo $pay;
    echo '<br>';


echo "</div>";

?>