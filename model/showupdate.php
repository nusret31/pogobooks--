<?php 
	
	include '../controller/db_crud.php';


$id=$_GET['id'];
	$pdo = db_crud::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM products where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		$titlu = $data['titlu'];
		$autor = $data['autor'];
		$img = $data['img'];
		$pret = $data['pret'];
		$an_aparitie = $data['an_aparitie'];
		$editura = $data['editura'];
		$nr_pagini = $data['nr_pagini'];
		$desk = $data['desk'];

		db_crud::disconnect();
	
	?>