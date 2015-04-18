<?php

include '../controller/login.php';


  $username = $_POST['username'];
  $password = $_POST['password'];
  
  Login::Check($username,$password);




  ?>
