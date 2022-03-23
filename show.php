<?php

           echo "<div class='product' id='".$_GET['id']."'>
              <div class='image'><img src='".$_GET['pic']."'></div>
              <div class='show-details'><h5>". $_GET['name']."</h5><ul>
              <li>Display size: ". $_GET['size']."</li>
              <li>brand: ". $_GET['brand']."</li>
              <li>Model: ". $_GET['model']."</li>
              <li>Storage capacity: ". $_GET['capacity']." Gb</li>
              <li>rate: ". $_GET['rate']."</li><br>
              <li>price: ". $_GET['price']." LE</li></ul>";