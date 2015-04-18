<?php

include '../controller/db_crud.php';

db_crud::connect();

class Login{

	public static function Check($user,$pass)
	{

      /*$sql = "select * from users where username='".$user."'AND password = '".$pass."' LIMIT 1";
		$result = mysql_query($sql);
        */
		
 $pdo = db_crud::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from users where username='".$user."'AND password = '".$pass."' LIMIT 1";
    $q = $pdo->prepare($sql);
    $q-> execute();

		session_start();

		    
              
         if($user=='pogo' && $pass=='pogo'){
         	$_SESSION['login_user']= $user; 

           header('Location:../view/adminpanel.php');

         } else {

          if($q->rowCount()){
		    
		     
		    session_start();

		    $_SESSION['login_user']= $user; 
               
		   header('Location:../index.php');

		  } else{
            
             header('Location:../index.php');		  
		   

		}

         }


	}
}




?>


