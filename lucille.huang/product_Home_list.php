<?php

include "lib/php/functions.php";
include "parts/templates.php";
// 每次點點看前面 //

$products = MYSQLIQuery("SELECT * FROM `products` WHERE `category` = 'Home'   LIMIT 12");

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>N a ë l - Home</title>
   
   <?php include "parts/meta.php"; ?>

</head>


<body>
   <?php include "parts/navbar.php"; ?>
</body>


<!-- marketing stuff -->
<div class="view-window2 display-flex flex-align-center flex-justify-center" style="background-image:url(img/products/images/home/R1.png)">
   <div>
      <h1 class="dark">The joy of spring time</h1>
      <div class="DiscoverButtonDiv2">
            <button>D I S C O V E R</button>
      </div>
   </div>
</div>


<!-- products     last revise May 8th 2:30am --> 
    <div class="product-contanier grid">
      
            

    <?php
      $marketingBreaks = 2;
      // 又個人叫markengbreaks他是2，他就是2 //
    for($i = 0; $i < count($products); $i++) {

      if ($i % 8 == 0) {
         echo '<div class="col-xs-12 col-md-6">
            <div class="product-image product">
               <img src="img/products/images/home/R' . $marketingBreaks . '.png" alt="home_r' . $marketingBreaks . '">
            </div>
         </div>';
         $marketingBreaks++;
      }

      echo makeProductList($products[$i]);
    }

    //www.php.net/manual/en/language.operators.arithmetic.php
    // 這裡找的 //
  

/*  <div class="grid gap product-list">
      <div class="col-xs-12 col-md-6">
         <a href="product_Electonics_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/R2.png" alt="home_r2">
            </div>
         </a>
      </div>



      <div class="col-xs-12 col-md-3">
         <a href="product_Fitness_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/h1.png" alt="h1">
            </div>
         </a>
      </div>

      <div class="col-xs-12 col-md-3">
         <a href="product_Home_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/h2.png" alt="h2">
            </div>
         </a>
      </div> -->

<!-- 第二行 -->
<!--       <div class="col-xs-12 col-md-3">
         <a href="product_Fitness_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/h3.png" alt="h1">
            </div>
         </a>
      </div>

            <div class="col-xs-12 col-md-3">
         <a href="product_Fitness_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/h4.png" alt="h1">
            </div>
         </a>
      </div>



      <div class="col-xs-12 col-md-3">
         <a href="product_Fitness_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/h5.png" alt="h1">
            </div>
         </a>
      </div>


      <div class="col-xs-12 col-md-3">
         <a href="product_Home_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/h6.png" alt="h2">
            </div>
         </a>
      </div> -->



<!-- 第3行 -->
<!--       <div class="col-xs-12 col-md-3">
         <a href="product_Fitness_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/h7.png" alt="h1">
            </div>
         </a>
      </div>

      <div class="col-xs-12 col-md-3">
         <a href="product_Home_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/h8.png" alt="h2">
            </div>
         </a>
      </div>

     <div class="col-xs-12 col-md-6">
         <a href="product_Electonics_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/R3.png" alt="home_r2">
            </div>
         </a>
      </div> -->


<!-- 第4行 -->
<!--       <div class="col-xs-12 col-md-3">
         <a href="product_Fitness_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/h9.png" alt="h1">
            </div>
         </a>
      </div> -->

<!--             <div class="col-xs-12 col-md-3">
         <a href="product_Fitness_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/h10.png" alt="h1">
            </div>
         </a>
      </div> -->



<!--       <div class="col-xs-12 col-md-3">
         <a href="product_Fitness_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/h11.png" alt="h1">
            </div>
         </a>
      </div> -->
      

<!--       <div class="col-xs-12 col-md-3">
         <a href="product_Fitness_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/h12.png" alt="h1">
            </div>
         </a>
      </div> -->

      */
      ?>

   </div>

</div>


    <?php include "parts/explorenael.php"; ?>


   <div class="attraction-contanier">
      <div class="grid gap product-list">
      <div class="col-xs-12 col-md-6">
         <a href="product_Electonics_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/R4.png" alt="R4">
            </div>
         </a>
      </div>





      <div class="col-xs-12 col-md-6">
         <a href="product_Fitness_list.php" class="product">
            <div class="product-image">
               <img src="img/products/images/home/R5.png" alt="R5">
            </div>
         </a>
      </div>
       </div>
   </div>


<!-- footer -->
    <?php include "parts/footer.php" ?>


</html>