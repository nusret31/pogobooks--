  <html>
   
   <head>
   	
   	<link rel="stylesheet" type="text/css" href="../css/index.css">
    
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
   
   </head>
   <body>

    <div class="container">
    		<div class="row">
    			<h3>PHP CRUD Grid</h3>
    		</div>
			<div class="row">
				<p>
					<a href="create.php" class="btn btn-success">Create</a>
				</p>
				
				<table class="table table-striped table-bordered">
		              <thead>
		                <tr>
		                
		                  <th>Id</th>
		                  <th>Titlu</th>
		                  <th>Autor</th>
		                  <th>Cover</th>
		                  <th>Pret</th>
		                   <th>An aparitie</th>
		                    <th>Editura</th>
		                     <th>Nr.pagini</th>
		                      <th>Desk</th>
		                 
		                </tr>
		              </thead>
		              <tbody>
		                <?php
                         
                         include '../model/crud.php';

		                ?>
				      </tbody>
	            </table>
	         
    	</div>
    </div> <!-- /container -->
    </body>
    </html>