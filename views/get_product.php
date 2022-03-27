<?php

function show($products){
$favourite = $_SESSION['favourite'] ?? array();
 foreach($products as $product){
   $heart = '&#9825;';
   if(array_search($product['id'],$favourite) !== false)
     $heart = '&#10084;';
   
 echo "<div class='product' id='_".$product['id']."'><a href='../views/show_product.php?".http_build_query($product)."'>
    <div class='image'><img src='".$product['pic']."'></div>
    <div class='details'><h5>". $product['name']."</h5>
    <label>brand: ". $product['brand']."</label>
    <label>&emsp;<span class='rate'>&#9733;</span> ". $product['rate']."</label><br>
    <label class='price'>". $product['price']." <small>LE</small></label></a><br>
    <input type='submit' class='addToCart' value='+ &#128722;'>&emsp;
    <a href='../views/favourite.php?favourite=".$product['id']."&page=".$_SERVER['PHP_SELF']."'><input type='submit' class='favourite' value='$heart'></a></div></div>";
 }
}