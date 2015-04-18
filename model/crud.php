<?php 
					   include '../controller/db_crud.php';
					   $pdo = db_crud::connect();

					   $sql = "SELECT * FROM products ORDER BY id DESC";

	 				   foreach ($pdo->query($sql) as $row) {
						   		echo '<br>';
						   		echo '<tr>';
                                echo '<td>'. $row['id'] . '</td>';
						   		echo '<td>'. $row['titlu'] . '</td>';
						   		echo '<td>'. $row['autor'] . '</td>';
						   		echo '<td>'. $row['img'] . '</td>';
						   		echo '<td>'. $row['pret'] . '</td>';
							   	echo '<td>'. $row['an_aparitie'] . '</td>';
							   	echo '<td>'. $row['editura'] . '</td>';
							   	echo '<td>'. $row['nr_pagini'] . '</td>';
							   	echo '<td>'."<span style=\"font-size: 10px\">" . $row['desk'] . "</span>".'</td>';
							   	echo '<td width=210>';
							   	echo '<a class="btn" href="read.php?id='.$row['id'].'">Read</a>';
							   	echo '&nbsp;';
							   	echo '<a class="btn btn-success" href="../view/update.php?id='.$row['id'].'">Update</a>';
							   	echo '&nbsp;';
							   	echo '<a class="btn btn-danger" href="deletecrud.php?id='.$row['id'].'">Delete</a>';
							   	echo '</td>';
							   	echo '</tr>';
					   }
					   
					  ?>