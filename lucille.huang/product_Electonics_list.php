<?php

include "lib/php/functions.php";
include "parts/templates.php";
// 每次點點看前面 //

$products = MYSQLIQuery("SELECT * FROM `products` WHERE `category` = 'Electronics' LIMIT 12");


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>N a ë l - Electronics</title>
   
   <?php include "parts/meta.php"; ?>

</head>


<body>
   <?php include "parts/navbar.php"; ?>
</body>

<!-- marketing stuff -->
<div class="view-window2 display-flex flex-align-center flex-justify-center" style="background-image:url(img/products/images/electronics/R1.png)">
   <div>
      <h1 class="dark">New tech in the comfort of your home</h1>
      <div class="DiscoverButtonDiv2">
            <button>D I S C O V E R</button>
      </div>
   </div>
</div>


<!-- < product    -->
    <div class="product-contanier grid">
            

    <?php


      $marketingBreaks = 2;
    for($i = 0; $i < count($products); $i++) {

      if ($i % 8 == 0) {
         echo '<div class="col-xs-12 col-md-6">
            <div class="product-image product">
               <img src="img/products/images/electronics/R' . $marketingBreaks . '.png" alt="electronics_r' . $marketingBreaks . '">
            </div>
         </div>';
         $marketingBreaks++;
      }

      echo makeProductList($products[$i]);
    }
    
    ?>
   </div>

</div>




<!-- expore -->
    <?php include "parts/explorenael.php"; ?>


<!-- attraction -->
   <div class="attraction-contanier">
      <div class="grid gap product-list">
      <div class="col-xs-12 col-md-6">
         <a href="product_Home_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/electronics/R4.png" alt="R4">
            </div>
         </a>
      </div>

      <div class="col-xs-12 col-md-6">
         <a href="product_Fitness_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/electronics/R5.png" alt="R5">
            </div>
         </a>
      </div>

      </div>
   </div>


<!-- footer -->
    <?php include "parts/footer.php" ?>


</html>