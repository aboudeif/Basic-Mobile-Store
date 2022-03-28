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
        
      
      <?php $char = "&#".rand(97,122).";";  ?>
      <label class='grid-item' for='id'>ID: </label class='grid-item'>
      <input class='grid-item' type='text' name = 'id' value='<?php echo "ms_" . $char . time(); ?>'disabled>
      <input class='grid-item hide' type='text'>
        
      <label class='grid-item' for='name'>name: <b class='required'>*</b></label class='grid-item'>
      <input class='grid-item' type='text' name='name' id='name' placeholder='Product name' required>
      <input class='grid-item hide' type='text'>
        
      <label class='grid-item' for='brand'>brand: <b class='required'>*</b></label class='grid-item'>
      <input class='grid-item' type='text' name='brand' id='brand' placeholder='Brand / Manufacturer' required>
      <input class='grid-item hide' type='text'>
        
      <label class='grid-item' for='model'>model: <b class='required'>*</b></label class='grid-item'>
      <input class='grid-item' type='text' name='model' id='model' placeholder='Product model' required>
      <input class='grid-item hide' type='text'>
        
      <label class='grid-item' for='size'>Screen size: <b class='required'>*</b></label class='grid-item'>
      <input class='grid-item' type='number' name='size' min='0' max='1000' id='size' placeholder='Product screen size' required>
      <input class='grid-item' type='text' value='Inch' disabled>
        
      <label class='grid-item' for='capacity'>Storage capacity: <b class='required'>*</b></label class='grid-item'>
      <input class='grid-item' type='number' name='capacity' min='0' id='capacity' placeholder='Product storage capacity' required>
      <input class='grid-item' type='text' value='GB' disabled>
        
      <label class='grid-item' for='rate'>Users rate: </label class='grid-item'>
      <input class='grid-item' type='number' name='rate' min='0' max='5' id='rate' value='3' disabled>
      <input class='grid-item' type='text' value='&#9733;' disabled>
        
      <label class='grid-item' for='pic'>Picture: <b class='required'>*</b></label class='grid-item'>
      <input class='grid-item' type='url' name='pic' id='pic' placeholder='Product picture URL' onchange='preview();' required>
      <input class='grid-item hide' type='text'>
        
      <label class='grid-item' for='price'>Price: <b class='required'>*</b></label class='grid-item'>
      <input class='grid-item' type='number' name='price' id='price' min='0' placeholder='Product price' required>
      <input class='grid-item' type='text' value='LE' disabled>
      
      <div class='preview grid-item2'>
      <img id='image' src='/preview.png' class='image' alt='Product image not found'>
        <input class='hide' type='text'>
        <input class='hide' type='text'>
      <div class='form-ctrl'>
        <button type='reset' name='reset' form='form'>Clear</button>
        <button type='submit' name='submit' form='form'>Save</button>
      </div>
      </div>
      
      </form>
