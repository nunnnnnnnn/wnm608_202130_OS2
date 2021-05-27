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

 <div class="bag-contanier">
    <div class="grid">

      <div class="col-xs-12 col-md-6">
            <div class="card">
            
               <a href="#" onclick="history.back();return false;">Back</a>
               <h2>Shipping and Billing Details </h2>

               <div class="form-control">
                 <label for="example1" class="form-label">Name</label>
                 <input id="example1" type="text" placeholder="John Smith" class="form-input">
               </div>

                <div class="form-control">
                 <label for="example1" class="form-label">Street Address</label>
                 <input id="example1" type="text" placeholder="888 California Rd." class="form-input">
               </div>

               <div class="form-control">
                 <label for="example1" class="form-label">Apt, Suite (Optional)</label>
                 <input id="example1" type="text" placeholder="Apt 234" class="form-input">
               </div>

                <div class="form-control">
                 <label for="example1" class="form-label">Zipcode</label>
                 <input id="example1" type="text" placeholder="94040" class="form-input">
               </div>

               <div class="form-control">
                 <label for="example1" class="form-label">State</label>
                 <input id="example1" type="text" placeholder="California" class="form-input">
               </div>

               <div class="form-control">
                 <label for="example1" class="form-label">Country</label>
                 <input id="example1" type="text" placeholder="U.S.A" class="form-input">
               </div>

               <div class="form-control">
                 <label for="example1" class="form-label">Phone</label>
                 <input id="example1" type="text" placeholder="(650)928-1234" class="form-input">
               </div>


               <h2>Your Credit Card Info</h2>

               <div class="form-control">
                 <label for="example1" class="form-label">Name on your card</label>
                 <input id="example1" type="text" placeholder="John Smith" class="form-input">
               </div>

                <div class="form-control">
                 <label for="example1" class="form-label">Credit card number</label>
                 <input id="example1" type="text" placeholder="8723 2349 2345 2345" class="form-input">
               </div>

               <div class="form-control">
                 <label for="example1" class="form-label">Month and Year</label>
                 <input id="example1" type="text" placeholder="09/25" class="form-input">
               </div>

              <div class="form-control">
                 <label for="example1" class="form-label">CCV</label>
                 <input id="example1" type="text" placeholder="342" class="form-input">
               </div>
            </div>
         </div>


       <div class="col-xs-12 col-md-6">
         <div class="bag-price"  style="padding-right: 10%;padding-top: 10%;padding-left: 10%;">
            <!-- <div class="card soft flat"> -->
            <?
            $cart = getCartItems();
            echo array_reduce($cart,'makeCondensedCartList');
            echo cartTotals();
            ?>

               <div class="card-section">
                  <!-- <a class="form-button" href="customer_action.php?crud=reset-cart">Confirm to Purchase</a> -->
                  <a class="form-button sell" = href="customer_action.php?crud=reset-cart">Confirm to Purchase</a>
               </div>
               <div class="card-section ">
                 <img src="img/payment/bitpay.png" style="cursor: pointer; max-width: 100%;height: 3em;border: solid 2px;" href="Cryptopayment.php">







                 <img src="img/payment/dodge.png" style="cursor: pointer; max-width: 100%;height: 3em;border: solid 2px;"/>
               </div>
               <!-- <div class="card-section">
                 <img src="img/payment/dodge.png" style="max-width: 100%;height: 3em;border: solid 2px;margin-left: 43%"/>
               </div> -->
            </div>
         </div>
      </div>
   </div>








<!-- footer -->
    <?php include "parts/footer.php" ?>


</html>