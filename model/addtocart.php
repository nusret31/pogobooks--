<?php
 session_start();

include '../controller/db_crud.php';

db_crud::connect();

 $id = intval($_POST['id']);

 $user = $_SESSION["login_user"];

  if($id > 0 && $user){
  	$host = "localhost";
    $user="root";
    $pass="";
    $db="pogobooks";

 }





?>