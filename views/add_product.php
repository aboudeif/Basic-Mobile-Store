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

      <h2 class='title'>New Product</h2>
      <form action='add_product.php' method='POST' id='form'>
        
      <div class='labels'>
      <label for='id'>ID: </label><br>
      <label for='name'>name: <b class='required'>*</b></label><br>
      <label for='brand'>brand: <b class='required'>*</b></label><br>
      <label for='model'>model: <b class='required'>*</b></label><br>
      <label for='size'>Screen size: <b class='required'>*</b></label><br>
      <label for='capacity'>Storage capacity: <b class='required'>*</b></label><br>
      <label for='rate'>Users rate: </label><br>
      <label for='pic'>Picture: <b class='required'>*</b></label><br>
      <label for='price'>Price: <b class='required'>*</b></label><br>
      </div>
      
      <div class='inputs'>
<!--       <input type='text' name='id' id='id' pattern='^[A-Za-z_](?:_?[A-Za-z0-9]+)*' title='ID can not starts with a number. example for accepted patterns: _123Aa, A123a, a123A' placeholder='Product id' required><br> -->
      <?php $char = "&#".rand(97,122).";";  ?>
      <input type='text' name = 'id' value='<?php echo "sn_" . $char . time(); ?>'disabled><br>
      <input type='text' name='name' id='name' placeholder='Product name' required><br>
      <input type='text' name='brand' id='brand' placeholder='Brand / Manufacturer' required><br>
      <input type='text' name='model' id='model' placeholder='Product model' required><br>
      <input type='number' name='size' min='0' max='1000.0000000000000' id='size' placeholder='Product screen size' required><br>
      <input type='number' name='capacity' min='0' id='capacity' placeholder='Product storage capacity' required><br>
      <input type='number' name='rate' min='0' max='5.0000000000000000' id='rate' value='3' disabled><br>
      <input type='url' name='pic' id='pic' placeholder='Product picture URL' onchange='preview();' required><br>
      <input type='number' name='price' id='price' min='0' placeholder='Product price' required><br>
      <input type='reset' name='reset' value='Clear'>
      <input type='submit' name='submit' value='Save'>
      </div>
      
      <div class='units'>
      <input type='text' class='hide'><br>
      <input type='text' class='hide'><br>
      <input type='text' class='hide'><br>
      <input type='text' class='hide'><br>
      <input type='text' value='Inch' disabled><br>
      <input type='text' value='GB' disabled><br>
      <input type='text' value='&#9733;' disabled><br>
      <input type='text' class='hide'><br>
      <input type='text' value='LE' disabled><br>
      </div>
      
      <div class='preview'>
      <input type='text' class='hide'><br>
      <img id='image' src='/preview.png' class='image' alt='Product image not found'>
      </div>
      </form>