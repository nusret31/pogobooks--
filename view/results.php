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



<div id="move">
<?php


if(isset ($_SESSION['res'])){

	echo $_SESSION['res'];

   
}
?>
</div>





<?php
    
    include '../view/footer.php';
  
   ?>

</body>

</html>