<?php

include '../controller/produse.php';



$products=Produse::SelectProducts();

for ($key_Number = 0; $key_Number < count($products); $key_Number+=8) {

echo 


"<div id= 'item'>" .


"<p><img src=\"../cover/".$products[$key_Number]."\" height=\"125\" width=\"110\" ></p>".
"<p>$".'<b>'.$products[$key_Number+3].'</b>'."</p>".
 "<p><a href=\"desk.php?id=".$products[$key_Number+2]."\" style=\"font-size:11\">".$products[$key_Number+1]. "</a></p>".  
"<p><a href=\"cart.php?id=".$products[$key_Number+2]."&pret=".$products[$key_Number+3]."&titlu=".$products[$key_Number+1]."\">Add to Cart</a></p>". 

 "</div>";

  }
             

?>