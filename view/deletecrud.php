<?php

include '../model/deletecrud.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="../css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Delete a Book.</h3>
		    		</div>
		    		
	    			<form class="form-horizontal" action="deletecrud.php" method="post">
	    			  <input type="hidden" name="id" value="<?php echo $id;?>"/>
					  <p class="alert alert-error">Are you sure to delete ?</p>
					  <div class="form-actions">
						  <button type="submit" class="btn btn-danger">Yes</button>
						  <a class="btn" href="adminpanel.php">No</a>
						</div>
					</form>
				</div>
				
    </div> <!-- /container -->
  </body>

<?php
 
 include 'footer.php';

?>
  
</html>