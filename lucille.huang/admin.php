
<!DOCTYPE html>
<html lang="en">
<head>
   <title>N a ë l - Electronics</title>
   
   <?php include "parts/meta.php"; ?>

</head>


<body>
   <?php include "parts/navbar.php"; ?>
</body>
</html>

<?php

include "lib/php/functions.php";
include "data/api.php";


// pretty_dump($_SERVER);
// pretty_dump([$_GET,$_POST]);

$products = makeStatement("products_admin_all");

//pretty_dump($products);



$empty_object = (object) [
   "name"=>"speaker",
   "price"=>"150",
   "category"=>"Electronics",
   "color"=>"black",
   "url"=>"xxxxxx.jpg",
   "thumbnail"=>"xxxxx_small.jpg",
   "description"=>"I only know the durian because of The Legend of Zelda.",
   "quantity"=>"10"
];



switch(@$_GET['crud']) {
   case 'update':
      makeStatement("product_update");
      header("location:{$_SERVER['PHP_SELF']}?id=".$_GET['id']);
      break;
   case 'create':
      $result = makeStatement("product_insert");
      header("location:{$_SERVER['PHP_SELF']}?id=".$result->insert_id);
      break;
   case 'delete':
      makeStatement("product_delete");
      header("location:{$_SERVER['PHP_SELF']}");
      break;
}





function productListItem($r,$product) {
return $r.<<<HTML
<div class="card-section">
   <div class="display-flex">
      <div class="flex-none image-thumbs">
         <img src="$product->url">
      </div>
      <div class="flex-stretch">$product->name</div>  
      <div class="flex-none">
         <a href="{$_SERVER['PHP_SELF']}?id=$product->id" class="form-button">Edit</a>
         <a href="product_item.php?id=$product->id" class="form-button">Visit</a>
      </div>  
   </div>
</div>
HTML;
}


function showProductPage($product) {

$id = $_GET['id'];
// $thumbs = explode(",", $product->image_other);
// $thumb_elements = array_reduce($thumbs,function($r,$o){
//    return $r."<img src='/images/store/$o'>";
// });
$addoredit = $id=="new" ? 'Add' : 'Edit';
$createorupdate = $id=="new" ? 'create' : 'update';
$showvisitlink = $id!="new" ? "<div><a href='product_item.php?id=$id' class='form-button'>Visit</a></div>" : "";

echo <<<HTML
<div class="grid gap">
<div class="col-xs-12">
<div class="card soft">
<nav class="nav pills display-flex">
   <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}"><img src="img/icon/arrow-left.svg" class="icon" style="font-size:1.5em"></a></div>
   <div class="flex-stretch"></div>
   <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$id&crud=delete"><img src="img/icon/trash.svg" class="icon" style="font-size:1.5em"></a></div>
</nav>
</div>
</div>
<div class="col-xs-12 col-md-4">
   <div class="card soft">
      <h2>$product->name</h2>
      <div>
         <strong>Price</strong>
         <div>&dollar;$product->price</div>
      </div>
      <div>
         <strong>Category</strong>
         <div>$product->category</div>
      </div>
      <div>
         <strong>Color</strong>
         <div>
            $product->color
         </div>
      </div>
      <div>
         <strong>Description</strong>
         <div>$product->description</div>
      </div>

      <div>
         <strong>Image</strong>
         <div class="image-thumbs">$product->url</div>
      </div>
      <div>
         <strong>Quantity</strong>
         <div>$product->quantity</div>
      </div>
      $showvisitlink
   </div>
</div>
<form class="col-xs-12 col-md-8" method="post" action="{$_SERVER['PHP_SELF']}?id=$id&crud=$createorupdate">
   <div class="card soft">
      <h2>$addoredit Product</h2>
      <input type="hidden" name="id" value="$id">
      <div class="form-control">
         <label class="form-label" for="product-title">Title</label>
         <input class="form-input" type="text" id="product-title" name="product-title" value="$product->name">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-price">Price</label>
         <input class="form-input" type="number" min="1" step=".01" id="product-price" name="product-price" value="$product->price">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-category">Category</label>
         <input class="form-input" type="text" id="product-category" name="product-category" value="$product->category">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-description">Description</label>
         <textarea class="form-input" id="product-description" name="product-description">$product->description</textarea>
      </div>
      <div class="form-control">
         <label class="form-label" for="product-image_thumb">Color</label>
         <input class="form-input" type="text" id="product-image_thumb" name="product-image_thumb" value="$product->color">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-image_other">Image</label>
         <input class="form-input" type="text" id="product-image_other" name="product-image_other" value="$product->url">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-quantity">Quantity</label>
         <input class="form-input" type="number" id="product-quantity" name="product-quantity" value="$product->quantity">
      </div>
      <div class="form-control">
         <input class="form-button" type="submit" value="Submit">
      </div>
   </div>
</form>
</div>
HTML;
}





?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Administrator</title>
   <?php include "parts/meta.php" ?>
</head>
<body>
   <header class="navbar">
      <div class="container display-flex flex-align-center">
         <div class="flex-none">
            <h1>Product Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <nav class="flex-none nav flex">
            <ul>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">

         <?php
         if(isset($_GET['id'])) {
            // ternary, conditional
            showProductPage(
               $_GET['id']=="new" ?
               $empty_object :
               getItemById($products,$_GET['id'])
            );
         } else {
         ?>

      <div class="card soft flat">
         <div class="card-section"><h2>Product List</h2></div>
         <?php

         echo array_reduce($products,'productListItem');

         ?>
      </div>
         <?php
         }
         ?>
   </div>
</body>
</html>