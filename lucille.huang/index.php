<?php 

include "php/mysql.php";
include "lib/php/functions.php";
include "parts/templates.php";

$res = msysqlQ("SELECT * FROM products ORDER BY id ASC LIMIT 2");

?>




<!DOCTYPE html>
<html lang="en">
<head>
   <title>N a ë l - Official</title>
   
   <?php include "parts/meta.php" ?>

</head>


<body>
   <?php include "parts/navbar.php" ?>
   <?php include "parts/topattraction.php" ?>
   <?php include "parts/explore.php" ?>

<!--    <div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url(https://i.pinimg.com/originals/80/4c/6e/804c6ebaa34dafc933c0847d9ca1fd15.png)">
      <h2 class="card soft dark">PRODUCT</h2>
   </div> -->

<!--     <div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url(img/bg.jpg)">
    	<div>
			<h2 class="card soft dark attract">Key upgrades for working from home success</h2>
         	<div class="DiscoverButtonDiv">
           		<button>discover</button>
         	</div>
    	</div>
    </div> -->

 

<!-- 
Here is I make   
    <div class="container2">
         <h5>E X P L O R E</h4>
         <h2>The perfect small goods, for any stay home workers </h2>
    </div> -->

   
  <div class="bgcontanier">
    <div class="grid">
        <div class="col-xs-12 col-md-2">
         <a href="product_Home_list.php" class="product">
            <figcaption class="product-caption">
               <div class="prodct-category">H O M E</div>
             </figcaption>
            <div class="product-image">
               <img src="img/homepage/h1.jpg" alt="h1">
            </div>
            <figcaption class="product-caption">
               <div class="product-title">Ceramic Sculpture</div>
<!--                <div class="product-price">&dollar;15</div>
 -->            </figcaption>
         </a>
        </div>

        <div class="col-xs-12 col-md-2">
         <a href="product_Home_list.php" class="product">
          <figcaption class="product-caption">
               <div class="prodct-category">H O M E</div>
             </figcaption>
            <div class="product-image">
               <img src="img/homepage/h4.jpeg" alt="h4">
            </div>
            <figcaption class="product-caption">
               <div class="product-title">Jute Doormat</div>
<!--                <div class="product-price">&dollar;15</div>
 -->            </figcaption>
         </a>
        </div>



        <div class="col-xs-12 col-md-2">
         <a href="product_Electonics_list.php" class="product">
            <figcaption class="product-caption">
               <div class="prodct-category">E L E C T O N I C S</div>
             </figcaption>
            <div class="product-image">
               <img src="img/homepage/h2.png" alt="h2">
            </div>
            <figcaption class="product-caption">
               <div class="product-title">Bang & Olufsen Speaker</div>
<!--                <div class="product-price">&dollar;15</div>
 -->            </figcaption>
         </a>       
        </div>

       


        <div class="col-xs-12 col-md-2">
         <a href="product_newarrivals_list.php" class="product">
            <figcaption class="product-caption">
               <div class="prodct-category">N E W&emsp;A R R I V A L S</div>
             </figcaption>
            <div class="product-image">
               <img src="img/homepage/h5.jpeg" alt="h5">
            </div>
            <figcaption class="product-caption">
               <div class="product-title">Handmade Basket</div>
<!--                <div class="product-price">&dollar;15</div>
 -->            </figcaption>
         </a>
        </div>

        <div class="col-xs-12 col-md-2">
         <a href="product_Fitness_list.php" class="product">
           <figcaption class="product-caption">
               <div class="prodct-category">F I T N E S S</div>
             </figcaption>
            <div class="product-image">
               <img src="img/homepage/h3.png" alt="h3">
            </div>
            <figcaption class="product-caption">
               <div class="product-title">Bala 1 LB Weighted Bangle</div>
<!--                <div class="product-price">&dollar;15</div>
 -->            </figcaption>
         </a>        
       </div>


      <div class="col-xs-12 col-md-2">
         <a href="product_Electonics_list.php" class="product">
            <figcaption class="product-caption">
               <div class="prodct-category">E L E C T O N I C S</div>
             </figcaption>
            <div class="product-image">
               <img src="img/homepage/h6.jpg" alt="h6">
            </div>
            <figcaption class="product-caption">
               <div class="product-title">Kreafunk Charge Mini</div>
<!--                <div class="product-price">&dollar;15</div>
 -->        </figcaption>
         </a>
        </div>


     </div>
</div>





   <?php include "parts/attraction.php" ?>
   <?php include "parts/Discover.php" ?>



    <div class="story-contanier">
         <h5>S T O R Y</h4>
         <h2>See latest style by our customers from the world</h2>
    </div>


    <div class="bgcontanier">
    <div class="grid">
        <div class="col-xs-12 col-md-4">
         <div class="story">
<!--             <figcaption class="product-caption">
               <div class="prodct-category">H O M E</div>
             </figcaption> -->
            <div class="product-image">
               <img src="img/homepage/S1.png" alt="S1">
            </div>
            <figcaption class="story-caption">
               <div class="story-title">@canancavintage&emsp;February 24, 2021</div>
               <div class="story-content">#Naël #home #decorationideas #homedecor #myhmhome #designer #inspohome #inspo #livingroomdecor　</div>
              </figcaption>
         </div>
        </div>


        <div class="col-xs-12 col-md-4">
         <div class="story">
<!--             <figcaption class="product-caption">
               <div class="prodct-category">H O M E</div>
             </figcaption> -->
            <div class="product-image">
               <img src="img/homepage/S2.png" alt="S2">
            </div>
            <figcaption class="story-caption">
               <div class="story-title">@villalove45&emsp;March 9, 2021</div>
               <div class="story-content">Å våkne til sol som sniker seg inn i sprekker mellom gardinene, forsterker bare følelsen om at våren er på vei</div>          
             </figcaption>
         </div>
        </div>

        <div class="col-xs-12 col-md-4">
         <div class="story">
<!--             <figcaption class="product-caption">
               <div class="prodct-category">H O M E</div>
             </figcaption> -->
            <div class="product-image">
               <img src="img/homepage/S3.png" alt="S3">
            </div>
            <figcaption class="story-caption">
               <div class="story-title">@kei.gunji&emsp;April 24, 2021</div>
               <div class="story-content">Naëlストの Beosound Balance-「録音スタジオの再現」を目指すB&Oには両手かっちりの演奏がお勧め。ポリーニのショパン練習曲集(1972)なんてどうでしょう？</div>
            </figcaption>
         </div>
        </div>
</div>
</div>



   <?php include "parts/footer.php" ?>


</body>
</html>