<?php

include "lib/php/functions.php";
include "parts/templates.php";
// 每次點點看前面 //

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>N a ë l - Sales</title>
   
   <?php include "parts/meta.php"; ?>

</head>


<body>
   <?php include "parts/navbar.php"; ?>
</body>


<!-- marketing stuff -->
<div class="view-window2 display-flex flex-align-center flex-justify-center" style="background-image:url(img/products/images/sale/R1.png)">
   <div>
      <h1 class="dark">Get it before it gone</h1>
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
               <img src="img/products/images/sale/R' . $marketingBreaks . '.png" alt="sale_r' . $marketingBreaks . '">
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
         <a href="product_Electonics_list.php" class="product">
            <div class="product-image">
               <img src="img/products/img/sale/R4.png" alt="R4">
            </div>
         </a>
      </div>

      <div class="col-xs-12 col-md-6">
         <a href="product_Fitness_list.php" class="product">
            <div class="product-image">
               <img src="img/products/img/sale/R5.png" alt="R5">
            </div>
         </a>
      </div>

      </div>
   </div>


<!-- footer -->
    <?php include "parts/footer.php" ?>
    
</html>