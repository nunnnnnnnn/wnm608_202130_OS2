<?php

include "lib/php/functions.php";
$product_id = $_GET['id'];
$product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = $product_id");
$id = $product[0]->id;


?>

<!DOCTYPE html>
<html lang="en">
<!-- title 這鬼東西的title到底怎麼改，還是找不到 5/18 -->

<head>
   <title>N a ë l - </title>
   
   <?php include "parts/meta.php" ?>

</head>


<body>
   <?php include "parts/navbar.php" ?>
</body>

<!-- URL 刺激 nav direction Last revised May15 17:05 i am dying hahhahaha-->

  <div class="itemnav">
     <div class="grid">
    	<div class="col-xs-12 col-md-12">
			 <?php
			if (isset($_GET['id'])) {
			    // echo $_GET['id'];
			    $product_id = $_GET['id'];
			    // echo $product_id;
			    $product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = $product_id");
			    // var_dump($product);
			    $cate = $product[0]->category;
			    $name = $product[0]->name;

			    echo "N a ë l &emsp;>&emsp;$cate&emsp;>&emsp;$name";

			} else {
			    // Fallback behaviour goes here
			    echo 'error';
			}?>
      </div>
  </div>
</div>


<!-- product  -->
   <div class="itemsell-contanier">
     <div class="grid">


     	<div class="col-xs-12 col-md-6" style="display: flex;">
     		<div class="product" style="margin: auto;">
               <!-- <img src="img/products/images/home/h5.png" alt="R4"> -->
           	   <img src="<?php 
           	   		$product_id = $_GET['id'];
           	   		$product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = $product_id");
           	   		$url = $product[0]->url;
           	   		echo($url);
           	   ?>" alt="" />
            </div>
        </div>

		
		<div class="col-xs-12 col-md-6" style="display: flex;">

     		<div class="item-contanier"> 
     			

     			<div class="item-title">
     			<?php
			if (isset($_GET['id'])) {
			    $product_id = $_GET['id'];
			    $product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = $product_id");
			    $name = $product[0]->name;
			    echo "$name";
			} else {
			    echo 'error';
			}?>
			   </div>

		   <div class="item-price"> 
     			$<?php
			if (isset($_GET['id'])) {
			    $product_id = $_GET['id'];
			    $product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = $product_id");
			    $price = $product[0]->price;
			    echo "$price";
			} else {
			    echo 'error';
			}?>
			</div>


            <div class="item-other"> 
     			<?php
			if (isset($_GET['id'])) {
			    $product_id = $_GET['id'];
			    $product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = $product_id");
			    $color = $product[0]->color;
			    echo "$color";
			} else {
			    echo 'error';
			}?>
			</div>



			<div class="item-other"> 
				In Stock
			</div>



<div class="form-select">

<form action="customer_action.php?crud=add-to-cart" method="post">
<input type="hidden" name="id" value=<?php echo "$id";?>>
<select name="amount" class="mySelectStyle">
	 <!-- option[value='$']*10>{$} -->
	<option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
</select>
</div>

			<div class="item-other">
				<button type="submit" class="form-button sell"> 
				Add to Bag			
				</button>
			</div>
		</form>

			<div class="item-other"> 
<!-- 			keep this empty
 -->			</div>

 			<div class="item-other"> 
<!-- 			keep this empty
 -->			</div>
             
            <div class="item-other"> 
     			M A T E R I A L 
			</div>


			<div class="item-other"> 
		    <?php
			if (isset($_GET['id'])) {
			    $product_id = $_GET['id'];
			    $product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = $product_id");
			    $material = $product[0]->material;
			    echo "$material";
			} else {
			    echo 'error';
			}?>
			</div>



            </div>
        </div>



      </div>
  </div>

<!-- product  detail May 16th-->
        <?php include "parts/details.php" ?>


     	<div class="details-contanier">
            <div class="grid">
     		
     		<div class="col-xs-12 col-md-12">
     		
     		<div class="item-none"> D E S C R I P T I O N</div>
     		<div class="item-none2">
			<?php
			if (isset($_GET['id'])) {
			    $product_id = $_GET['id'];
			    $product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = $product_id");
			    $description = $product[0]->description;
			    echo "$description";
			} else {
			    echo 'error';
			}?>
           </div>


			<div class="item-none"> S I Z E</div>
			<div class="item-none2">
			<?php
			if (isset($_GET['id'])) {
			    $product_id = $_GET['id'];
			    $product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = $product_id");
			    $size = $product[0]->size;
			    echo "$size";
			} else {
			    echo 'error';
			}?>
           </div>

			<div class="item-none"> C A R E &emsp; I N S T R U C T I O N</div>
			<div class="item-none2">
			<?php
			if (isset($_GET['id'])) {
			    $product_id = $_GET['id'];
			    $product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = $product_id");
			    $careinstruction = $product[0]->careinstruction;
			    echo "$careinstruction";
			} else {
			    echo 'error';
			}?>
           </div>

			<div class="item-none"> I M P O R T E D</div>
            <div class="item-none2">
			<?php
			if (isset($_GET['id'])) {
			    $product_id = $_GET['id'];
			    $product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = $product_id");
			    $import = $product[0]->import;
			    echo "$import";
			} else {
			    echo 'error';
			}?>
           </div>

			<div class="item-none"> 
			P R O D U C T&emsp;N U M B E R  :  
				    <?php
			if (isset($_GET['id'])) {
			    $product_id = $_GET['id'];
			    $product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = $product_id");
			    $serialnumber = $product[0]->serialnumber;
			    echo "$serialnumber";
			} else {
			    echo 'error';
			}?>
			</div>
		</div>
      </div>
  </div>


<!-- you may like 這裡秘密基地455678394590 -->
    <?php include "parts/maylike.php" ?>



<!-- footer  -->
    <?php include "parts/footer.php" ?>

</html>