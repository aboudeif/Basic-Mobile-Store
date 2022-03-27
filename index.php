<?php 
session_start();
include('data/Products.php');
include('views/get_product.php');
$products = $_SESSION['products'];

if($_GET && !($_GET['history'])){
  setcookie('history-3' , $_COOKIE['history-2']);
  setcookie('history-2' , $_COOKIE['history-1']);
  setcookie('history-1',"https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
}
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP End of Module Assignment</title>
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <?php include('layout/nav.html'); ?>
    <div id='login_board'></div>
    <article>
    <?php
        if($_POST)
          array_push($products, $_POST);
          
        if($_GET && !($_GET['history'])){
          foreach($_GET as $key=>$value){
            foreach($products as $p_key => $p_value){
            if(strtolower($_GET[$key]) != strtolower($products[$p_key][$key]))
              unset($products[$p_key]);
            }
          }
        }
       
        
        else
         $products = array_slice($products,0,15);

         show($products);

  echo "<form id='hiddenform'>
        <input type='hidden' val='' name='val'>
        </form>";
    ?> 
  </body>
</html>