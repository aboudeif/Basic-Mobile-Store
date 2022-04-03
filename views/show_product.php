<link rel='stylesheet' href='../styles/style.css'>
<?php include('../layout/nav.html'); ?>

<h2 class='product-title'> <?php echo $_GET['name']; ?></h2>
<article class='show-body body'>
  <div class='show-product'>
    <img src='<?php echo $_GET['pic']; ?>'>
  </div>
  <div class='show-details'>
    <ul>
      <li>Name: <span class='product-detail'><?php echo $_GET['name']; ?></span</li>
      <li>ID: <span class='product-detail'><?php echo $_GET['id']; ?></span</li>
      <li>Display size: <span class='product-detail'><?php echo $_GET['size']; ?></span</li>
      <li>brand: <span class='product-detail'><?php echo $_GET['brand']; ?></span</li>
      <li>Model: <span class='product-detail'><?php echo $_GET['model']; ?></span</li>
      <li>Storage capacity: <span class='product-detail'><?php echo $_GET['capacity']; ?> Gb</span</li>
      <li>rate: <span class='product-detail'><?php echo str_repeat("&#9733;",$_GET['rate']); ?></span></li>
      <li>price: <span class='product-detail'><?php echo $_GET['price']; ?> LE</span</li>
    </ul>
  </div>
</article>

