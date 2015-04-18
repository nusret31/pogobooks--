
<html>

<head>

<link rel="stylesheet" type="text/css" href="./css/index.css">
<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="http://themes.googleusercontent.com/static/fonts/roboto/v11/2UX7WLTfW3W8TclTUvlFyQ.woff">



</head>

<body>
	


 <div id="logo">

         <h2>Pogobooks++</h2>

     </div>


      <div id="login"> 

 <?php 
    include 'model/welcomediv.php';
 ?>
  
  </div>
  
    <div id="search">
       <form action = "/pogobooks++/model/results.php" method="post">

   <input type="text" name="value" placeholder="Search Anything" style="height:30px; width:190px;" >
   <input type="submit" name="search" value="Search" style="height:30px" >
  
   </form>
   
 </div>

<?php

include './view/list.php';

?>

</div>

<?php
    
    include './view/footer.php';
  
   ?>

</body>

</html>