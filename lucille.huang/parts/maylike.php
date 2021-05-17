
<!-- 秘密基地 https://www.w3schools.com/php/func_array_count.asp -->


    <div class="maylike">
         <h5>Y O U&emsp;M A Y&emsp;L I K E</h4>
         <h2>People also interested in . . .</h2>
    </div>

  <div class="bgcontanier">
    <div class="grid">
        <div class="col-xs-12 col-md-3">
          <?php 
            $product = MYSQLIQuery("SELECT * FROM `products`");
            $ran_id = rand(0, count($product)-1);
            $url = $product[$ran_id]->url;
            $name = $product[$ran_id]->name;
            $price = $product[$ran_id]->price;
            $id = $product[$ran_id]->id;
            echo "
              <a href='product_item.php?id=$id' class='product'>
                <div class='product-image'>
                  <img src='$url' alt='' />
                  <figcaption class='product-caption2'>
                    <div class='product-title'>$name</div>
                    <div class='product-price'>$$price</div>
                  </figcaption>
                </div>
              </a>
                ";
          ?>
        </div>

        <div class="col-xs-12 col-md-3">
        	<?php 
            $product = MYSQLIQuery("SELECT * FROM `products`");
            $ran_id = rand(0, count($product)-1);
            $url = $product[$ran_id]->url;
            $name = $product[$ran_id]->name;
            $price = $product[$ran_id]->price;
            $id = $product[$ran_id]->id;
            echo "
              <a href='product_item.php?id=$id' class='product'>
                <div class='product-image'>
                  <img src='$url' alt='' />
                  <figcaption class='product-caption2'>
                    <div class='product-title'>$name</div>
                    <div class='product-price'>$$price</div>
                  </figcaption>
                </div>
              </a>
                ";
          ?>
        </div>


        <div class="col-xs-12 col-md-3">
        	<?php 
            $product = MYSQLIQuery("SELECT * FROM `products`");
            $ran_id = rand(0, count($product)-1);
            $url = $product[$ran_id]->url;
            $name = $product[$ran_id]->name;
            $price = $product[$ran_id]->price;
            $id = $product[$ran_id]->id;
            echo "
              <a href='product_item.php?id=$id' class='product'>
                <div class='product-image'>
                  <img src='$url' alt='' />
                  <figcaption class='product-caption2'>
                    <div class='product-title'>$name</div>
                    <div class='product-price'>$$price</div>
                  </figcaption>
                </div>
              </a>
                ";
          ?>
        </div>

      
        <div class="col-xs-12 col-md-3">
        	<?php 
            $product = MYSQLIQuery("SELECT * FROM `products`");
            $ran_id = rand(0, count($product)-1);
            $url = $product[$ran_id]->url;
            $name = $product[$ran_id]->name;
            $price = $product[$ran_id]->price;
            $id = $product[$ran_id]->id;
            echo "
              <a href='product_item.php?id=$id' class='product'>
                <div class='product-image'>
                  <img src='$url' alt='' />
                  <figcaption class='product-caption2'>
                    <div class='product-title'>$name</div>
                    <div class='product-price'>$$price</div>
                  </figcaption>
                </div>
              </a>
                ";
          ?>
        </div>


    </div>
</div>