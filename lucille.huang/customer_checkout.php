<?php

include "lib/php/functions.php";
include "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>N a ë l - Checkout</title>
   
   <?php include "parts/meta.php" ?>

</head>


<body>
   <?php include "parts/navbar.php" ?>
</body>

<!-- Cart content -->

 <div class="container">
      <div class="grid gap">
         <div class="col-xs-12 col-md-8">
            <div class="card soft">
               <a href="#" onclick="history.back();return false;">Back</a>
               <h2>Shipping and Billing Details </h2>

               <div class="form-control">
                 <label for="example1" class="form-label">Name</label>
                 <input id="example1" type="text" placeholder="John Smith" class="form-input">
               </div>

                <div class="form-control">
                 <label for="example1" class="form-label">Street Address</label>
                 <input id="example1" type="text" placeholder="555 California Rd." class="form-input">
               </div>

               <div class="form-control">
                 <label for="example1" class="form-label">Apt, Suite (Optional)</label>
                 <input id="example1" type="text" placeholder="" class="form-input">
               </div>

                <div class="form-control">
                 <label for="example1" class="form-label">Zipcode</label>
                 <input id="example1" type="text" placeholder="94122" class="form-input">
               </div>

               <div class="form-control">
                 <label for="example1" class="form-label">State</label>
                 <input id="example1" type="text" placeholder="California" class="form-input">
               </div>

               <div class="form-control">
                 <label for="example1" class="form-label">Coumtry</label>
                 <input id="example1" type="text" placeholder="U.S.A" class="form-input">
               </div>

               <div class="form-control">
                 <label for="example1" class="form-label">Phone</label>
                 <input id="example1" type="text" placeholder="2223331234" class="form-input">
               </div>





            </div>
         </div>
         <div class="col-xs-12 col-md-4">
            <div class="card soft flat">
            <?
            $cart = getCartItems();
            echo array_reduce($cart,'makeCondensedCartList');
            echo cartTotals();
            ?>

               <div class="card-section">
                  <a class="form-button" href="customer_action.php?crud=reset-cart">Confirm to Purchase</a>
               </div>
            </div>
         </div>
      </div>
   </div>








<!-- footer -->
    <?php include "parts/footer.php" ?>


</html>