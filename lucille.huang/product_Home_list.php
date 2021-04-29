<?php

include "lib/php/functions.php"
include "parts/templates.php"

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>N a ë l</title>
   
   <?php include "parts/meta.php" ?>

</head>


<body>
   <?php include "parts/navbar.php" ?>

       <div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url(img/bg.jpg)">

   <?php

   $products = MYSQLIQuery("SELET * FROM `products`");

   pretty_dump($products);

   echo array_reduce($products,'makeProductList');

   ?>








</body>







</html>