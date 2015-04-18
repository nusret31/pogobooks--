<?php
 
  include '../controller/db_crud.php';
  db_crud::connect();
  
$id = $_GET['id'];

    // sending query

$pdo = db_crud::connect();
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "DELETE FROM addtocart  WHERE id = ?";
      $q = $pdo->prepare($sql);
       $q->execute(array($id));
      
      header('Location:../view/cart.php');
    ?>   