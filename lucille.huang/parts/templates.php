<?php

function makeProductList($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-sm-6 col-md-4">
   <a href="product_item.php?id=$o->id" class="product">
      <div class="product-image">
         <img src="/images/store/$o->image_thumb" alt="">
      </div>
      <figcaption class="product-caption">
         <div class="product-price">&dollar;$o->price</div>
         <div class="product-title">$o->title</div>
      </figcaption>
   </a>
</div>
HTML;
}




function makeCartList($r,$o) {
return $r.<<<HTML
<div class="display-flex">
   <div class="flex-none image-thumbs">
      <img src="/images/store/$o->image_thumb">
   </div>
   <div class="flex-stretch">
      <strong>$o->title</strong>
      <div>Delete</div>
   </div>
   <div class="flex-none">
      &dollar;$o->price
   </div>
</div>
HTML;
}