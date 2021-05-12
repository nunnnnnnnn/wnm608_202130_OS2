<?php

function makeProductList($product) {
return '<div class="col-xs-12 col-md-3">
   <a href="product_item.php?id=' . $product->id . '" class="product">
      <div class="product-image">
         <img src="' . $product->thumbnail . '" alt="">
         <figcaption class="product-caption2">
            <div class="product-price">&dollar;' . $product->price . '</div>
            <div class="product-title">' . $product->name . '</div>
         </figcaption>
      </div>
    </a>
</div>';
}




function makeCartList($r,$o) {
return $r.<<<HTML
<div class="display-flex">
   <div class="flex-none image-thumbs">
      <img src="$o->thumbnail">
   </div>
   <div class="flex-stretch">
      <strong>$o->name</strong>
      <div>Delete</div>
   </div>
   <div class="flex-none">
      &dollar;$o->price
   </div>
</div>
HTML;
}


