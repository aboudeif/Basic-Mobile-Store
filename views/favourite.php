<?php 
session_start();
$favourite = $_SESSION['favourite'] ?? array();
if($_GET['favourite']){
$key = array_search($_GET['favourite'],$favourite);
if($key !== false){
unset($favourite[$key]);
$_SESSION['favourite'] = $favourite;
header("location: ".$_GET['page']);
}
else{
array_push($favourite,$_GET['favourite']);
$_SESSION['favourite'] = $favourite;
header("location: ".$_GET['page']);
}
}
elseif(!$_GET){
$products = $_SESSION['products'];
include('../views/get_product.php');
echo "<link rel='stylesheet' href='../styles/style.css'>";
include('../layout/nav.html');
//  
  
  foreach($products as $key => $value){
    if(array_search($products[$key]['id'],$_SESSION['favourite'] ?? array()) === false)
      unset($products[$key]);
  }

  echo "<h2 class='title'>Favourites</h2>";
  echo "<article>";
  show($products);
  echo "</article>";
}