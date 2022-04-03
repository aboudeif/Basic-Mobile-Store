<?php
session_start();
if(isset($_SESSION['products'])){
$products = $_SESSION['products'];
echo "<aside>";
   echo "<br><label class='filter-label'>☰ Filters Menu</label>";
  foreach($products['0'] as $key_ => $value_){
    if($key_ == 'pic' || $key_ == 'name' || $key_ == 'id' || $key_ == 'rate' || $key_ == 'price') continue;
    echo "<br><br><label class='filter-label'>".ucwords($key_).": </label><br>";
  foreach($products as $product){
    $recent[$key_][] = null;
  foreach($product as $key => $value){
    $check = ($_GET[$key] == $value) ? "check_box":"check_box_outline_blank";
    $style = ($_GET[$key] == $value) ? "color: royalblue;":"";
   if($key === $key_ && array_search($value,$recent[$key]) === false){
     $old_query = $_SERVER['QUERY_STRING'] ?? "";
     $query_statments = explode("&",$_SERVER['QUERY_STRING']);
     $flag=0;
     foreach($query_statments as $statement){
       $query_key = rtrim(str_split($statement,strpos($statement,"=")+1)[0],"=");
       $query_val = ltrim($statement,$query_key."=");
       if( $query_key === $key){
          $old_query = str_replace($query_val, $value, $old_query);
          $flag =1;
          break;
       }
     }
     if(!$flag)
         $old_query .= $_SERVER['QUERY_STRING'] ? "&".$key."=".$value : $key."=".$value ;
      
  echo "<br><a href='". $_SERVER['PHP_SELF']."?".$old_query."' style='$style'><label class='material-icons-outlined' style='$style'>$check</label> $value</a>";
    $recent[$key_][] = $value;
   }
  }
}
}
echo "</aside>";
}