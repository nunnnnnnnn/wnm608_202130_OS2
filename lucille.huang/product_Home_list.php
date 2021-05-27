<?php

include "lib/php/functions.php";
include "parts/templates.php";
// 每次點點看前面 //
include "data/api.php";

// $search = isset($_GET['s']) ?$_GET['s']:"";

// if(isset($_GET['t'])) {
//    $result = makeStatement($_GET['t']);
//    $products = isset($result['error']) ? [] : $result;
// } else {
//    $result = makeStatement("products_all");
//    $products = isset($result['error']) ? [] : $result;
// }



// pretty_dump([$_GET,$_POST]);

setDefault('s',''); // search
setDefault('t','products_all'); // type
setDefault('d','DESC'); // order direction
setDefault('o','date_create'); // order by
setDefault('l','12'); // limit

function makeSortOptions() {
   $options = [
      ["date_create","DESC","Latest Products"],
      ["date_create","ASC","Oldest Products"],
      ["price","DESC","Highest Price"],
      ["price","ASC","Lowest Price"]
   ];
   foreach($options as [$orderby,$direction,$title]) {
      echo "
      <option data-orderby='$orderby' data-direction='$direction'
      ".($_GET['o']==$orderby && $_GET['d']==$direction ? "selected" : "").">
      $title</option>
      ";
   }
}

$current_category = 'Home';

if(isset($_GET['t'])) {
  if ($_GET['t'] == 'products_all'){
    $products = MYSQLIQuery("SELECT * FROM `products` WHERE `category` = '$current_category'   LIMIT 12");
  } else {
    $result = makeStatement($_GET['t']);
    $products = isset($result['error']) ? [] : $result;
  }
} else {
   $result = makeStatement($_GET['t']);
   $products = isset($result['error']) ? [] : $result;
}

// pretty_dump($products)

// $products = MYSQLIQuery("SELECT * FROM `products` WHERE `category` = 'Home'   LIMIT 12");

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
<div class="view-window2 display-flex flex-align-center flex-justify-center" style="background-image:url(img/products/images/home/R1-1.png)">
   <div>
      <h1 class="dark">The joy of spring time</h1>
      <div class="DiscoverButtonDiv2">
            <button>D I S C O V E R</button>
      </div>
   </div>
</div>


<!-- SEARCH -->
<div class="product-contanier grid">
   
      <div class="col-xs-12 col-md-12"> </div>
</div>

<!-- SEARCH -->
<div class="product-contanier grid">
   
      <div class="col-xs-12 col-md-9">
         <form action="product_Home_list.php" method="get" class="hotdog" style="margin-top:1em" >
             <input type="hidden" name="t" value="search">
             <?php echo "<input type='hidden' name='category' value='$current_category'>" ?>
             <input type="hidden" name="d" value="<?=$_GET['d']?>">
             <input type="hidden" name="o" value="<?=$_GET['o']?>">
             <input type="hidden" name="l" value="<?=$_GET['l']?>">
             <input type="search" name="s" placeholder="You can Search any items under Home category here" value="<?= $_GET['s'] ?>">
         </form>
       </div>


      <div class="col-xs-12 col-md-3">
       <div class="display-flex flex-align-center">
         <div class="flex-stretch"></div>
         <form action="product_Home_list.php" method="get">
            <input type="hidden" name="t" value="search">
            <?php echo "<input type='hidden' name='category' value='$current_category'>" ?>
            <input type="hidden" name="s" value="<?=$_GET['s']?>">
            <input type="hidden" name="d" value="<?=$_GET['d']?>">
            <input type="hidden" name="o" value="<?=$_GET['o']?>">
            <input type="hidden" name="l" value="<?=$_GET['l']?>">
            <div class="form-select">
               <select onChange="checkSort(this)">
                <!-- <select onChange="this.form.submit()"> -->
                  <? makeSortOptions() ?>
               </select>
            </div>
         </form>
      </div>
    </div>
</div>


<!-- < product    -->
    <div class="product-contanier grid">
            
    <!--(search)叫叫ABC～～～～回call no東西-->
      <?php

      if(empty($products)) {
         echo "No products found.";
      } 
      ?>
    <!--死機啊-->




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
         <a href="product_Electronics_list.php" class="product">
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
         <a href="product_Electronics_list.php" class="product">
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
         <a href="product_Electronics_list.php" class="product">
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