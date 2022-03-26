<?php 
session_start();

?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP End of Module Assignment</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav><ul>
      <a href='index.php'><li>&#127968;</li></a>
      <li>&#128722;</li>
       <a href='?fav=all'><li>&#10084;</li></a>
      <a href='add_product.php'><input type='submit' class='add-new' value='+ Add Product'></a>
    </ul></nav>
    <div id='login_board'></div>
    <article>
    <?php 
     include('data/Products.php');
        if($_POST){
          $products[] = $_POST;
          echo "<div class='product' id='_".$_POST['id']."'><a href='/show.php?".http_build_query($_POST)."'>
              <div class='image'><img src='".$_POST['pic']."'></div>
              <div class='details'><h5>". $_POST['name']."</h5>
              <label>brand: ". $_POST['brand']."</label>
              <label>&emsp;<span class='rate'>&#9733;</span> ". $_POST['rate']."</label><br>
              <label class='price'>". $_POST['price']." <small>LE</small></label></a><br>
              <input type='submit' form='hiddenform' class='addToCart' value='+ &#128722;'>&emsp;
              <input type='submit' class='fav' value='&#9825;'></div></div>";
        }
        if($_GET && !($_GET['fav']) && !($_GET['fav'])){
          foreach($_GET as $key=>$value){
            foreach($products as $p_key => $p_value){
            if(strtolower($_GET[$key]) != strtolower($products[$p_key][$key]))
              unset($products[$p_key]);
            }
          }
        }
        elseif($_GET['fav'] === 'all'){
          foreach($products as $product=>$value){
            if(array_search($products[$product]['id'],$_SESSION['fav']) === false)
              unset($products[$product]);
          }
        }
        else
          $products = array_slice($products,0,15);
         $fav = $_SESSION['fav'] ?? array();
         foreach($products as $product){
           $heart = '&#9825;';
           if(array_search($product['id'],$fav) !== false)
             $heart = '&#10084;';
           
           echo "<div class='product' id='_".$product['id']."'><a href='/show.php?".http_build_query($product)."'>
              <div class='image'><img src='".$product['pic']."'></div>
              <div class='details'><h5>". $product['name']."</h5>
              <label>brand: ". $product['brand']."</label>
              <label>&emsp;<span class='rate'>&#9733;</span> ". $product['rate']."</label><br>
              <label class='price'>". $product['price']." <small>LE</small></label></a><br>
              <input type='submit' form='hiddenform' class='addToCart' value='+ &#128722;'>&emsp;
              <a href='/_fav.php?fav=".$product['id']."'><input type='submit' class='fav' value='$heart'></a></div></div>";
         }
  echo "<form id='hiddenform'>
        <input type='hidden' val='' name='val'>
        </form>";
    ?> 
  </body>
</html>