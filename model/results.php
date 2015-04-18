<html>

<head>

<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">


</head>

<body>

<?php


include '../controller/db_crud.php';

db_crud::connect();


  session_start();

 
  if(isset($_POST['value'])){
     $search_value = $_POST['value'];
     if($search_value=="")
     {
          header('Location:../index.php');
   
     }
      else
      {

      $out="";
         
     $pdo = db_crud::connect();
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "SELECT * FROM products WHERE keywords LIKE '%".$search_value."%'";
      $q = $pdo->prepare($sql);
      $q-> execute();


      
           while($row = $q->fetch(PDO::FETCH_ASSOC)){

           	    
         $out.=  "<div id= 'item'>" .


"<p><img src=\"../cover/".$row['img']."\" height=\"125\" width=\"110\" ></p>".
"<p>$".'<b>'.$row['pret'].'</b>'."</p>".
 "<p><a href=\"desk.php?id=".$row['id']."\" style=\"font-size:11\">".$row['titlu']. "</a></p>".  
"<p><a href=\"cart.php?id=".$row['id']."&pret=".$products[$key_Number+3]."&titlu=".$row['titlu']."\">Add to Cart</a></p>". 

 "</div>";


                
        }
    
            
    }
}   


$_SESSION['res']= $out;

header('Location:../view/results.php');
?> 

</body>

</html>