<?php
function show($products){
$favourite = $_SESSION['favourite'] ?? array();
 foreach($products as $product){
   $heart = '&#9825;';
   if(array_search($product['id'],$favourite) !== false)
     $heart = '&#10084;';
   
 echo "<div class='product' id='_".$product['id']."'><a href='../views/show_product.php?".http_build_query($product)."'>
    <div class='image'><img src='".$product['pic']."'></div>
    <div class='details'><h5>". $product['name']."</h5></a>
    <a class='brand' href='../index.php?brand=".$product['brand']."'><label>". $product['brand']."</label></a>
    <label>&nbsp;<span class='rate'>".str_repeat("&#9733;",$product['rate']). $product['rate']."</span></label><br>
    <label class='price'>". $product['price']." <small>LE</small></label><br>
    <input type='submit' class='addToCart' value='+ &#128722;'>&emsp;
    <a href='../views/favourite.php?favourite=".$product['id']."&page=".$_SERVER['PHP_SELF']."?". $_SERVER['QUERY_STRING']."#_".$product['id']."'><input type='submit' class='favourite' value='$heart'></a></div></div>";
 }
}