<?php 
session_start();
include('data/Products.php');
// print_r($_SESSION['products']);
// $products = $_SESSION['product'];
if($_GET && !($_GET['fav']) && !($_GET['history'])){
  setcookie('history-3' , $_COOKIE['history-2']);
  setcookie('history-2' , $_COOKIE['history-1']);
  setcookie('history-1',"https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
}
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
      <a href='?history=all'><li>&#x1F50D;</li></a>
      <a href='add_product.php'><input type='submit' class='add-new' value='&#10024; New Product'></a>
    </ul></nav>
    <div id='login_board'></div>
    <article>
    <?php
        if($_POST)
          array_push($products, $_POST);
          
        if($_GET && !($_GET['fav']) && !($_GET['history'])){
          foreach($_GET as $key=>$value){
            foreach($products as $p_key => $p_value){
            if(strtolower($_GET[$key]) != strtolower($products[$p_key][$key]))
              unset($products[$p_key]);
            }
          }
        }
        elseif($_GET['fav'] === 'all'){
          foreach($products as $key => $value){
            if(array_search($products[$key]['id'],$_SESSION['fav'] ?? array()) === false)
              unset($products[$key]);
          }
        }
         elseif($_GET['history'] === 'all'){
           $str = "no history";
           
          echo "<ul><a href='".$_COOKIE['history-1']."'><li>1- ".$_COOKIE['history-1']."</li></a>
                <a href='".$_COOKIE['history-2']."'><li>2- ".$_COOKIE['history-2']."</li></a>
                <a href='".$_COOKIE['history-3']."'><li>3- ".$_COOKIE['history-3']."</li></a></ul>";
           return;
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