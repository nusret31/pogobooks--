
<html>

<head>

<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">


</head>

<body>
	


 <div id="logo">

         <h2>Pogobooks++ <br>Admin Panel</h2> <br><br>

     </div>


      <div id="login"> 

 <?php 
    include '../model/welcomediv.php';
 ?>
  
 </div>

<?php
 include '../view/crud.php';
?>
<br><br><br>
  <?php
    
    include '../view/footer.php';
  
   ?>

</body>
</html>