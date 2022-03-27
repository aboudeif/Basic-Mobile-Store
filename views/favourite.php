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
echo "<div class='title-icon'>&#10084;</div><div class='title'><h2>Favourites</h2></div>";  
  
  foreach($products as $key => $value){
    if(array_search($products[$key]['id'],$_SESSION['favourite'] ?? array()) === false)
      unset($products[$key]);
  }
  
  echo "<article>";
  show($products);
  echo "</article>";
}