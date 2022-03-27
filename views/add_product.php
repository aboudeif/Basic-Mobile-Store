<?php 
session_start();
$products = $_SESSION['products'];
if($_POST) array_push($products,$_POST);
$_SESSION['products'] = $products;
?>

    <link rel='stylesheet' href='../styles/style.css'>

    <script>function preview(){var src = document.getElementById('pic').value;
        document.getElementById('image').src = src?document.getElementById('pic').value:'/preview.png';}</script>
      
      <?php include('../layout/nav.html'); ?>
     
      <div class='title-icon'>&#10024;</div><div class='title'><h2>Add new Product</h2></div>
  
      <form action='#' method='POST' id='form' class='body'>
      
      <div class='labels'>
      <label for='id'>ID: </label><br>
      <label for='name'>name: </label><br>
      <label for='brand'>brand: </label><br>
      <label for='model'>model: </label><br>
      <label for='size'>Screen size: </label><br>
      <label for='capacity'>Storage capacity: </label><br>
      <label for='rate'>Users rate: </label><br>
      <label for='pic'>Picture: </label><br>
      <label for='price'>Price: </label><br>
      </div>
      
      <div class='inputs'>
      <input type='text' name='id' id='id' pattern='^[A-Za-z_](?:_?[A-Za-z0-9]+)*' title='ID can not starts with a number. example for accepted patterns: _123Aa, A123a, a123A' placeholder='Product id' required><br>
      <input type='text' name='name' id='name' placeholder='Product name' required><br>
      <input type='text' name='brand' id='brand' placeholder='Brand / Manufacturer' required><br>
      <input type='text' name='model' id='model' placeholder='Product model' required><br>
      <input type='number' name='size' id='size' placeholder='Product screen size' required><br>
      <input type='number' name='capacity' id='capacity' placeholder='Product storage capacity' required><br>
      <input type='number' name='rate' id='rate' value='3' disabled><br>
      <input type='url' name='pic' id='pic' placeholder='Product picture URL' onchange='preview();' required><br>
      <input type='number' name='price' id='price' placeholder='Product price' required><br>
      <input type='submit' name='submit'>
      <input type='reset' name='reset'>
      </div>
      
      <div class='units'>
      <input type='text' value='<?php echo time(); ?>'disabled><br>
      <input type='text' class='hide'><br>
      <input type='text' class='hide'><br>
      <input type='text' class='hide'><br>
      <input type='text' value='Inch' disabled><br>
      <input type='text' value='GB' disabled><br>
      <input type='text' class='hide'><br>
      <input type='text' class='hide'><br>
      <input type='text' value='LE' disabled><br>
      </div>
      
      <div class='preview'>
      <img id='image' src='/preview.png' class='image' alt='Product image not found'></div>
<!--       <input type='submit' name='preview' value='preview' form='form'> -->
      </div>
      </form>