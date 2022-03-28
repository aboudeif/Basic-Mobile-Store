<?php
session_start();
# 'Products.php' contains products dataset
include('data/Products.php');
# 'get_product.php' contains a function to print products
include('views/get_product.php');
# products data stored in session as extra layer allowing user add to them
$products = $_SESSION['products'];
if($_GET){
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
    <?php include('layout/nav.html');
      if($_GET){
      echo "<span class='search-title'> Search for:</span><div>";
      foreach($_GET as $key => $value)
        echo "<span class='key'>".$key."</span><span class='value'>".$value."</span> ";
      echo "</div>";
      }
    ?>
    <div id='login_board'></div>
    <article>
    <?php
        if($_POST)
          array_push($products, $_POST);
          
        if($_GET){    
          foreach($_GET as $key=>$value){
            foreach($products as $p_key => $p_value)
            if(strtolower($_GET[$key]) != strtolower($products[$p_key][$key]))
              unset($products[$p_key]);
          }
        }

        else
         $products = array_slice($products,0,15);
         show($products);
    ?> 
  </body>
</html>