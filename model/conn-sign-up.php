<?php

include '../controller/db_crud.php';

db_crud::connect();

function NewUser()
{
	$username = $_POST['username'];

	$password =  $_POST['password'];

    
     $pdo = db_crud::connect();
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";
      $q = $pdo->prepare($sql);
      $q-> execute();
	/*$query = "INSERT INTO users (username,password) VALUES ('$username','$password')";

	$data = mysql_query ($query)or die(mysql_error());*/
	
	if($q)
	{
	echo "Registration complete...";
	header('Location:../index.php');
	}
}

function SignUp()
{
if(!empty($_POST['username']))  
{
	 $pdo = db_crud::connect();
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "SELECT * FROM users WHERE username = '$_POST[username]' AND password = '$_POST[password]'";
     $q = $pdo->prepare($sql);
     $q-> execute();

	if(!$q->rowCount())
	{
		NewUser();
	}
	else
	{
		echo "Ai cont...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>


