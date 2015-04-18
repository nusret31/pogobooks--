<html>

<head>

<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">


</head>

<body>
	
	
<div id="login">

<?php

include '../model/welcomediv.php';

?>

</div>

 <div id="logo">

         <h2><a href="../index.php">Pogobooks++</a></h2>

     </div>

     <center>
<br><br><br><br><br>
<h2>Shopping Cart</h2><br>
<form id="shopping-cart" action="cart.php" method="post">
	<table border="1" class="shopping-cart" style="width:60%">
		<thead>
			<tr>

				<th scope="col">Info Product</th> 
				<th scope="col">Quantity</th>
				<th scope="col">Operations</th>
				<th scope="col">Cart Owner</th>
				<th scope="col">Total price</th>
				
			</tr>
			
		</thead>
          
           <?php
          include '../model/cart.php';
          ?>

		<tbody></tbody><br><br>

	</table>
<br>
	</center>
	<ul id="shopping-cart-actions">
		<li>
			<a href="../view/produse.php" class="btn"> Continue Shopping </a>
		</li>
		<li>
			<a href="checkout.php" class="btn"> Go To Checkout </a>
		</li>
	</ul>
</form>
</center>
   <?php
    
    include '../view/footer.php';
  
   ?>
</body>
</html>