<html>
  <head>
    <title>PHP End of Module Assignment</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav><ul>
      <li>&#128722;</li>
      <li onclick='login();'>Login</li>
    </ul></nav>
    <div id='login_board'>
      <form action='account.php' method='GET'>
        <input type='text' name='username' placeholder='User name' /><br />
        <input type='password' name='password' placeholder='Password' /><br />
        <input type='submit' value='Login' />
        <input type='reset' value='Clear' />
      </form></div>
    <article>
    <?php 
       include('data/Products.php');
        if($_GET){
          foreach($_GET as $key=>$value){
            foreach($products as $p_key => $p_value){
            if(strtolower($_GET[$key]) != strtolower($products[$p_key][$key]))
              unset($products[$p_key]);
            }
          }
        }
        else
          echo "";
         foreach($products as $product){
           echo "<div class='product' id='".$product['id']."'><a href='/show.php?".http_build_query($product)."'>
              <div class='image'><img src='".$product['pic']."'></div>
              <div class='details'><h5>". $product['name']."</h5>
              <label>brand: ". $product['brand']."</label>
              <label>rate: ". $product['rate']."</label><br>
              <label>price: ". $product['price']."</label></a>
              <input type='button' class='addToCart' value='+ &#128722;'></div></div>";
         }
      
    ?> 
  </body>
</html>