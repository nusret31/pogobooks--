<?php

include '../model/read.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

	<div class="span10 offset1">
		<div class="row">
			<h3>Read a Book.</h3>
		</div>
		
		<div class="form-horizontal">
		  <div class="control-group">
		    <label class="control-label">Title:</label>
		    <div class="controls">
			    <label class="checkbox">
			     	<?php echo $data['titlu'];?>
			    </label>
		    </div>
		  </div>

		  <div class="control-group">
		    <label class="control-label">Author:</label>
		    <div class="controls">
		      	<label class="checkbox">
			     	<?php echo $data['autor'];?>
			    </label>
		    </div>
		  </div>

		  <div class="control-group">
		    <label class="control-label">Book Cover:</label>
		    <div class="controls">
		      	<label class="checkbox">
			     	<?php echo $data['img'];?>
			    </label>
		    </div>
		  </div>
          
            <div class="control-group">
		    <label class="control-label">Price:</label>
		    <div class="controls">
		      	<label class="checkbox">
			     	<?php echo $data['pret'];?>
			    </label>
		    </div>
		  </div>

<div class="control-group">
		    <label class="control-label">Release Year:</label>
		    <div class="controls">
		      	<label class="checkbox">
			     	<?php echo $data['an_aparitie'];?>
			    </label>
		    </div>
		  </div>



<div class="control-group">
		    <label class="control-label">Publisher:</label>
		    <div class="controls">
		      	<label class="checkbox">
			     	<?php echo $data['editura'];?>
			    </label>
		    </div>
		  </div>

		   <div class="control-group">
		    <label class="control-label">Page Number:</label>
		    <div class="controls">
		      	<label class="checkbox">
			     	<?php echo $data['nr_pagini'];?>
			    </label>
		    </div>
		  </div>

          <div class="control-group">
		    <label class="control-label">Description:</label>
		    <div class="controls">
		      	<label class="checkbox">
			     	<?php echo $data['desk'];?>
			    </label>
		    </div>
		  </div>

		   <div class="control-group">
		    <label class="control-label">Keywords:</label>
		    <div class="controls">
		      	<label class="checkbox">
			     	<?php echo $data['keywords'];?>
			    </label>
		    </div>
		  </div>


		    <div class="form-actions">
			  <a class="btn" href="../view/adminpanel.php">Back</a>
		   </div>
		
		 
		</div>
	</div>
	
</div> <!-- /container -->

</body>

<?php

include 'footer.php';

?>

</html>