<?php 
	
	include '../controller/db_crud.php';


$id=$_GET['id'];
	$pdo = db_crud::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM products where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		$titlu = $data['titlu'];
		$autor = $data['autor'];
		$img = $data['img'];
		$pret = $data['pret'];
		$an_aparitie = $data['an_aparitie'];
		$editura = $data['editura'];
		$nr_pagini = $data['nr_pagini'];
		$desk = $data['desk'];
		$keywords = $data['keywords'];

		db_crud::disconnect();
	
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
		    			<h3>Update a Book.</h3>
		    		</div>
    		
	    			<form class="form-horizontal" action="../model/update.php?id=<?php echo $id?>" method="post">
					
					  <div class="control-group <?php echo !empty($titluError)?'error':'';?>">
					    <label class="control-label">Title</label>
					    <div class="controls">
					      	<input name="titlu" type="text"  placeholder="Title" value="<?php echo !empty($titlu)?$titlu:'';?>">
					      	<?php if (!empty($titluError)): ?>
					      		<span class="help-inline"><?php echo $titluError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>


					  <div class="control-group <?php echo !empty($autorError)?'error':'';?>">
					    <label class="control-label">Author</label>
					    <div class="controls">
					      	<input name="autor" type="text" placeholder="Author" value="<?php echo !empty($autor)?$autor:'';?>">
					      	<?php if (!empty($autorError)): ?>
					      		<span class="help-inline"><?php echo $autorError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>


					  <div class="control-group <?php echo !empty($imgError)?'error':'';?>">
					    <label class="control-label">Book Cover</label>
					    <div class="controls">
					      	<input name="img" type="file"  placeholder="Book Cover" value="<?php echo !empty($img)?$img:'';?>">
					      	<?php if (!empty($imgError)): ?>
					      		<span class="help-inline"><?php echo $imgError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>

                       <div class="control-group <?php echo !empty($pretError)?'error':'';?>">
					    <label class="control-label">Price</label>
					    <div class="controls">
					      	<input name="pret" type="text"  placeholder="Price" value="<?php echo !empty($pret)?$pret:'';?>">
					      	<?php if (!empty($pretError)): ?>
					      		<span class="help-inline"><?php echo $pretError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>

                      
                        <div class="control-group <?php echo !empty($an_aparitieError)?'error':'';?>">
					    <label class="control-label">Release Year</label>
					    <div class="controls">
					      	<input name="an_aparitie" type="text"  placeholder="Release Year" value="<?php echo !empty($an_aparitie)?$an_aparitie:'';?>">
					      	<?php if (!empty($an_aparitieError)): ?>
					      		<span class="help-inline"><?php echo $an_aparitieError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>


                      <div class="control-group <?php echo !empty($edituraError)?'error':'';?>">
					    <label class="control-label">Publisher</label>
					    <div class="controls">
					      	<input name="editura" type="text"  placeholder="Publisher" value="<?php echo !empty($editura)?$editura:'';?>">
					      	<?php if (!empty($edituraError)): ?>
					      		<span class="help-inline"><?php echo $edituraError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>



                       <div class="control-group <?php echo !empty($nr_paginiError)?'error':'';?>">
					    <label class="control-label">Page Number</label>
					    <div class="controls">
					      	<input name="nr_pagini" type="text"  placeholder="Page Number" value="<?php echo !empty($nr_pagini)?$nr_pagini:'';?>">
					      	<?php if (!empty($nr_paginiError)): ?>
					      		<span class="help-inline"><?php echo $nr_paginiError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
 

                     <div class="control-group <?php echo !empty($deskError)?'error':'';?>">
					    <label class="control-label">Description</label>
					    <div class="controls">
					      	<input name="desk" type="text" style="height:120px; width:240px;" value="<?php echo !empty($desk)?$desk:'';?>">
					      	<?php if (!empty($deskError)): ?>
					      		<span class="help-inline"><?php echo $deskError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>


					   <div class="control-group <?php echo !empty($keywordsError)?'error':'';?>">
					    <label class="control-label">Keywords</label>
					    <div class="controls">
					      	<input name="keywords" type="text" placeholder = "Keywords" value="<?php echo !empty($keywords)?$keywords:'';?>">
					      	<?php if (!empty($keywordsError)): ?>
					      		<span class="help-inline"><?php echo $keywordsError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					   <br>

				<div class="form-actions">
						  <input type="submit" class="btn btn-success" value="Update">
						   <a class="btn" href="adminpanel.php">Back</a>
						</div>
    </div> <!-- /container -->
  </body>

<?php
 
 include 'footer.php';

?>

</html>