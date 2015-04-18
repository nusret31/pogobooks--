<?php


include '../controller/db_crud.php';

db_crud::connect();


if(isset($_GET['id'])){
$id=$_GET['id'];

$pdo = db_crud::connect();
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "select * FROM products  WHERE id = ?";
      $q = $pdo->prepare($sql);
       $q->execute(array($id));

}
while($row = $q->fetch(PDO::FETCH_ASSOC)){

echo 


"<div id= 'desk'>" .

"<p><img src=\"../cover/".$row['img']."\" height=\"240\" width=\"240\" ></p>".
 "<p><a href=\"desk.php?id=".$row['id']."\" style=\"font-size:15\">".$row['titlu']. "</a></p>".
 "<p>".$row['desk']."</p>".
  "<p>"."<b>Editura: ".$row['editura']."</b>"."</p>".
  "<p>"."<b>An aparitie: ".$row['an_aparitie']."</b>"."</p>".
  "<p>"."<b>Numar pagini: ".$row['nr_pagini']."</b>"."</p>".
  "<p>"."<b>Pret: ".$row['pret']."</b>"."</p>";

 }



?>