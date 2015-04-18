<html>

<head>

<link rel="stylesheet" type="text/css" href="../css/index.css">

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

<style>
  body{margin-bottom: 60px;}
 </style>

</head>

<body>
	


 <div id="logo">

         <h2><a href="../index.php">Pogobooks++</a></h2>

     </div>


      <div id="login"> 

 <?php 

    include '../model/welcomediv.php';
 ?>


   </div>



   


<br><br>

<center>


<form action="../view/sendorder.php" method="post" id="checkout-order-form">
 <br><br><br>
		<fieldset id="fieldset-billing">
			<legend>Billing</legend>
				<!-- Name, Email, City, Address, ZIP Code, Country (select box) -->

<div>
	<label for="name">Name</label>
	<input type="text" name="name" id="name" data-type="string" data-message="This field may not be empty" />
</div>
<br>
<div>  
	<label for="email">Email</label>
	<input type="text" name="email" id="email" data-type="expression" data-message="Not a valid email address" />
</div>
<br>
<div>
	<label for="city">City</label>
	<input type="text" name="city" id="city" data-type="string" data-message="This field may not be empty" />
</div>
<br>
<div>
	<label for="address">Address</label>
		<input type="text" name="address" id="address" data-type="string" data-message="This field may not be empty" />
</div>
<br>
<div>
	<label for="zip">ZIP Code</label>
	<input type="text" name="zip" id="zip" data-type="string" data-message="This field may not be empty" />
</div>
<br>
<div>
	<label for="country">Country</label>
		
		<select name="country" id="country" data-type="string" data-message="This field may not be empty">
			
			<option value="">Select</option>
			<option value="USA">USA</option>
			<option value="Romania">Romania</option>
			<option value="Norway">Norway</option>
			<option value="Denwark">Denmark</option>
			<option value="Italy">Italy</option>
			<option value="France">France</option>
			<option value="Serbia">Serbia</option>
			<option value="Japan">Japan</option>
			<option value="England">England</option>
			<option value="China">China</option>

		</select>
</div>
</fieldset>

<br>



<fieldset id="fieldset-shipping">
<legend>Shipping</legend>
	

<label><input type="radio" name="ship" value="Romanian Postoffice">Romanian Postoffice<br></label>
<label><input type="radio" name="ship" value="Cargus">Cargus </label>

<hr>
</fieldset>

<fieldset id = "fieldset-payment">
<legend>Payment</legend>

<label><input type="radio" name="pay" value="Ramburs">Ramburs<br></label>
<label><input type="radio" name="pay" value="Card">Card<br></label>
<label><input type="radio" name="pay" value="Paypal">Paypal<br></label>


 </fieldset>

   
    <input type="submit" value="Submit" class="btn">
      

<?php
    
    include '../view/footer.php';
  
   ?>
</form>
</center>
</body>
</html>