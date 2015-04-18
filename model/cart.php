<?php  

 include '../controller/db_crud.php';

 db_crud::connect();

  if ($_SERVER['REQUEST_METHOD'] === 'GET') 
{
	if(isset($_GET['id'])) {
		
	$titlu=$_GET['titlu'];
	$pret=$_GET['pret'];  
     /*$SQL = "INSERT INTO addtocart (titlu, cantitate, operatii,pret) VALUES ('$titlu','','Delete','$pret')";
     $results = mysql_query($SQL);
     */
            $pdo = db_crud::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO addtocart (titlu,pret,cart_owner) values(?,?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($titlu,$pret,$_SESSION['login_user']));
  }
} 
  $total=0;

    /*$SQL='select * from addtocart';
    $results=mysql_query($SQL); */

    $pdo = db_crud::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM `addtocart` WHERE `cart_owner` = '{$_SESSION['login_user']}'";
		$q = $pdo->prepare($sql);
		$q-> execute();

		while($row = $q->fetch(PDO::FETCH_ASSOC)){
			//print_r($stack);
			//return $row;
			$titlu = $row['titlu'];
			$pret = $row['pret'];
			
			$total += $pret;

		  echo "<tr>";

		     echo '<td>' .'<center>'.$row[ 'titlu'].'</center>'.'</td>'; 
		   echo '<td>' .'<input type="text" id="num" value="1" onchange="change(this,'.$titlu.','.$pret.')">'. '</td>';
		   echo '<td>' .'<a href="../model/delete.php?id='.$row['id'].'">Delete</a>'. '</td>'; 
		    echo '<td>' .'<p>'. $row['cart_owner'].'</p>'. '</td>';
		   echo '<td>' .$row['pret']. '</td>';

		    echo "</tr>";  

}
		  
		echo "<table border=\"1\" class=\"shopping-cart\" style=\"width:60%\">";
		 echo " <th width=\"95\" scope=\"col\">Total</th>";  
           echo '<td >' .$total. '</td>';
           echo "</table>"; 
		 ?> 