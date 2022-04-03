<?php 
session_start();
$cart = $_SESSION['cart'] ?? array();
if($_GET['cart']){
$key = array_search($_GET['cart'],$cart);
if($key !== false){
unset($cart[$key]);
$_SESSION['cart'] = $cart;
header("location: ".$_GET['page']);
}
else{
array_push($cart,$_GET['cart']);
$_SESSION['cart'] = $cart;
header("location: ".$_GET['page']);
}
}
elseif(!$_GET){
# 'Products.php' contains products dataset
include('../data/Products.php');
$products = $_SESSION['products'];
include('../views/get_product.php');
echo "<link rel='stylesheet' href='../styles/style.css'>";
include('../layout/nav.html');
  
foreach($products as $key => $value){
  if(array_search($products[$key]['id'],$_SESSION['cart']??array()) === false)
    unset($products[$key]);
}

echo "<h2 class='title'>Shopping Cart</h2>";
echo "<article class='body'>";
show($products);
echo "</article>";
}