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

      <h2 class='title'>Add New Product</h2>

     <?php 
      if(isset($_POST['submit']))
      $style = "animation: done 3s alternate;"; 
      echo "<div class='notification' style='".$style."' >&#9989; New Product has been added successfully</div>"; 
      ?>

      <form action='add_product.php' method='POST' id='form'>
      
      <?php $char = "&#".rand(97,122).";";  ?>
      <label for='id'>ID: </label>
      <input type='text' name = 'id' value='<?php echo "ms_" . $char . time(); ?>' readonly>
      <input class='hide' type='text'>
        
      <label for='name'>name: <b class='required'>*</b></label>
      <input type='text' name='name' id='name' placeholder='Product name' required>
      <input class='hide' type='text'>
        
      <label for='brand'>brand: <b class='required'>*</b></label>
      <input type='text' name='brand' id='brand' placeholder='Brand / Manufacturer' required>
      <input class='hide' type='text'>
        
      <label for='model'>model: <b class='required'>*</b></label>
      <input type='text' name='model' id='model' placeholder='Product model' required>
      <input class='hide' type='text'>
        
      <label for='size'>Screen size: <b class='required'>*</b></label>
      <input type='number' name='size' min='0.0' step='0.1' max='1000.0' id='size' placeholder='Product screen size' required>
      <input type='text' value='Inch' disabled>
        
      <label for='capacity'>Storage capacity: <b class='required'>*</b></label>
      <input type='number' name='capacity' min='0.0' step='0.1' id='capacity' placeholder='Product storage capacity' required>
      <input type='text' value='GB' disabled>
        
      <label for='rate'>Users rate: </label>
      <input type='number' name='rate' min='0.0' step='0.1' max='5.0' id='rate' value='3' readonly>
      <input type='text' value='&#9733;' disabled>
        
      <label for='pic'>Picture: <b class='required'>*</b></label>
      <input type='url' name='pic' id='pic' placeholder='Product picture URL' onchange='preview();' required>
      <input class='hide' type='text'>
        
      <label for='price'>Price: <b class='required'>*</b></label>
      <input type='number' name='price' id='price' min='0' step='0.01' placeholder='Product price' required>
      <input type='text' value='LE' disabled>
      
      <div class='preview grid-item2'>
      <img id='image' src='../images/preview.png' class='image' alt='Product image not found'>
        <input class='hide' type='text'>
      <div class='form-ctrl'>
        <button type='reset' name='reset' form='form'>Clear</button>
        <button type='submit' name='submit' form='form'>Save</button>
      </div>
      </div>
      </form>
