<?php function show($products){
$favourite = $_SESSION['favourite'] ?? array();
$cart = $_SESSION['cart'] ?? array();
  
 foreach($products as $product){
   $heart = '&#9825;';
   $color = '';
   if(array_search($product['id'],$favourite) !== false)
     $heart = '&#10084;';
   if(array_search($product['id'],$cart) !== false)
     $color = 'selected';
     
   
 echo "<div class='product' id='".$product['id']."'><a href='../views/show_product.php?".http_build_query($product)."' title='Show details'>
    <div class='image'><img src='".$product['pic']."'></div>
    <div class='details'><h5>". $product['name']."</h5></a>
    <a class='brand' href='../index.php?brand=".$product['brand']."' title='Find brand's products'><label>". $product['brand']."</label></a>
    <label>&nbsp;<span class='rate'>".str_repeat("&#9733;",$product['rate']). $product['rate']."</span></label><br>
    <label class='price'>". $product['price']." <small>LE</small></label><br>
    <a href='../views/cart.php?cart=".$product['id']."&page=".$_SERVER['PHP_SELF']."?". $_SERVER['QUERY_STRING']."#".$product['id']."' title='Add to cart'><input type='submit' class='addToCart material-icons-outlined $color' value=' shopping_cart + '></a>&emsp;
    <a href='../views/favourite.php?favourite=".$product['id']."&page=".$_SERVER['PHP_SELF']."?". $_SERVER['QUERY_STRING']."#".$product['id']."' title='Add to favourites'><input type='submit' class='favourite' value='$heart'></a></div></div>";
 }
}