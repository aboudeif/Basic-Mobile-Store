<?php
session_start();
# 'Products.php' contains products dataset
include('data/Products.php');
# 'get_product.php' contains a function to print products
include('views/get_product.php');
# products data stored in session as extra layer allowing user add to them
$products = $_SESSION['products'];
if($_GET){
  setcookie('search-link-3' , $_COOKIE['search-link-2']);
  setcookie('search-link-2' , $_COOKIE['search-link-1']);
  setcookie('search-link-1',"https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
 $search = "<span class='search-title'> Search for:</span><div>";
 foreach($_GET as $key => $value)
   $search .= "<span class='key'>".$key."</span><span class='value'>".$value."</span>";
    $search .= "</div>";
  setcookie('search-3' , $_COOKIE['search-2']);
  setcookie('search-2' , $_COOKIE['search-1']);
  setcookie('search-1',$search);
  
}
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP End of Module Assignment</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <?php include('layout/nav.html');
     if(!$_GET)
     echo "<video src='../media/iPhoneXTrailer-Apple.mp4' muted onclick='this.play()' title='Click to play'></video>";
      if($_GET){
      // echo "<span class='search-title'> Search for:</span><div>";
      echo $search;
        // echo "<span class='key'>".$key."</span><span class='value'>".$value."</span> ";
      // echo "</div>";
        
  
      }
    echo "<article class='body'>";
    include('views/filters.php');
        ?>
    <article class='content'>
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
  </article>
  </article>
  </body>
</html>