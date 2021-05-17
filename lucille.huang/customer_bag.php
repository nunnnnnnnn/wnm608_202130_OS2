<?php

include "lib/php/functions.php";
include "parts/templates.php";



$cart = MYSQLIQuery("SELECT * FROM `products` WHERE `id` IN (5,9,13)");

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>N a ë l - Bag</title>
   
   <?php include "parts/meta.php" ?>

</head>


<body>
   <?php include "parts/navbar.php" ?>
</body>


<!--cart content recording 4/22 2;00-->
<div class="bag-contanier">
    <div class="grid">
      <div class="col-xs-12 col-md-3">
         <div class="footer">
            <figcaption class="footer-caption">
               <div class="bag-category">T O T A L</div>
            </figcaption>
          </a>
      </div>
 </div>

     <div class="col-xs-12 col-md-3"></div>
     <div class="col-xs-12 col-md-3"></div>



      <div class="col-xs-12 col-md-3">
        <div class="footer">
            <figcaption class="footer-caption2">
               <div class="bag-category">
               	<div class="form-button sell">C H E C K O U T</div>
               </div>
            </figcaption>
        </a>
      </div>
    </div>
</div>
</div>

<div class="bag3">
	<h2>Your Bag</h2>
</div>



<div class="bag-contanier">
    <div class="grid">

      <div class="col-xs-12 col-md-6">
         <div class="footer">
            <figcaption class="footer-caption">
               <div class="bag-category">T O T A L







               </div>
            </figcaption>
          </a>
      </div>
 </div>

       <div class="col-xs-12 col-md-6">
         <div class="bag-price">
            <figcaption class="footer-caption">
               <div class="bag-category">O R D E R&emsp;V A L U E</div>
               <div class="bag-category">E S T I M A T E&emsp;T A X</div>
               <div class="bag-category">S H I P P I N G</div>
               <div class="bag-category">T O T A L</div>

               	<div class="form-button sell">C O N T I N U E&emsp;T O&emsp;C H E C K O U T</div>

            </figcaption>
          </a>
      </div>
 </div>

</div>
</div>





<!-- you may like 這裡秘密基地455678394590 -->
    <?php include "parts/maylike.php" ?>


<!-- footer -->
    <?php include "parts/footer.php" ?>

</html>