<?php

include '../controller/db_crud.php';

db_crud::connect();


class Produse{

	public static $products = array( );
	public static function SelectProducts(){
    $pdo = db_crud::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM products";
    $q = $pdo->prepare($sql);
    $q-> execute();
	
    	while($row = $q->fetch(PDO::FETCH_ASSOC)){

			array_push(self::$products, $row['img']);
            array_push(self::$products, $row['titlu']);
            array_push(self::$products,$row['id']);
            array_push(self::$products,$row['pret']);
            array_push(self::$products,$row['desk']);
            array_push(self::$products,$row['an_aparitie']);
            array_push(self::$products,$row['editura']);
            array_push(self::$products,$row['nr_pagini']);
		}

   return self::$products;

}
	}



?>

