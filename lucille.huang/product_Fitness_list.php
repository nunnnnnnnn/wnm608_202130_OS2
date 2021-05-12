<?php

include "lib/php/functions.php";
include "parts/templates.php";
// 每次點點看前面 //

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>N a ë l - Fitness</title>
   
   <?php include "parts/meta.php"; ?>

</head>


<body>
   <?php include "parts/navbar.php"; ?>
</body>

<!-- marketing stuff -->
<div class="view-window2 display-flex flex-align-center flex-justify-center" style="background-image:url(img/products/images/fitness/R1.png)">
   <div>
      <h1 class="dark">Take a deep breathe</h1>
      <div class="DiscoverButtonDiv2">
            <button>D I S C O V E R</button>
      </div>
   </div>
</div>


<!-- < product    -->
    <div class="product-contanier grid">
      <div class="col-xs-12 col-md-6">
         <a href="product_Electonics_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/fitness/R2.png" alt="home_r2">
            </div>
         </a>
      </div>
            

    <?php

    $products = MYSQLIQuery("SELECT * FROM `products` WHERE `category` = 'Fitness'");
    echo "<script>console.log('" . json_encode($products) . "');</script>";


    echo array_reduce($products,'makeProductList'); 
    
    ?>
   </div>

</div>




<!-- expore -->
    <?php include "parts/explorenael.php"; ?>


<!-- attraction -->
   <div class="attraction-contanier">
      <div class="grid gap product-list">
      <div class="col-xs-12 col-md-6">
         <a href="product_Electonics_list.php" class="product">
            <div class="product-image">
               <img src="img/products/img/fitness/R4.png" alt="R4">
            </div>
         </a>
      </div>

      <div class="col-xs-12 col-md-6">
         <a href="product_Fitness_list.php" class="product">
            <div class="product-image">
               <img src="img/products/img/fitness/R5.png" alt="R5">
            </div>
         </a>
      </div>
      </div>
   </div>


<!-- footer -->
    <?php include "parts/footer.php" ?>

</html>