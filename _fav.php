<?php 
session_start();
$fav = $_SESSION['fav'] ?? array();
$id = $_GET['fav'];
if($id){
    $key = array_search($id,$fav);
    if($key != false){
      unset($fav[$key]);
      $_SESSION['fav'] = $fav;
      header("location: /index.php");
}
    else{
    array_push($fav,$id);
    $_SESSION['fav'] = $fav;
    header("location: /index.php");
    }
}