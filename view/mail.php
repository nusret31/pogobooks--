

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



<?php
 include '../model/mail.php';
?>

 <div id = 'mail'>
 <form action = 'mail.php' method="post" >

  Email: <input name="email" type="text" /><br />
  <br>
  Subject: <input name="subject" type="text" /><br />
  <br>
  Message:<br />

  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form>
</div>

</body>

<?php
    
    include '../view/footer.php';
  
   ?>

</html>