<?php
session_start();
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
echo "<aside>";
foreach($products as $product){
  foreach($product as $key => $value)
  echo "<input type='select' name='".$key."_".$value."' value='$value'>";
}
echo "</aside>";
}