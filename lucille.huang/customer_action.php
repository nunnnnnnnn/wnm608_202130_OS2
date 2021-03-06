<?php

include_once "lib/php/functions.php";

switch($_GET['crud']) {
   case "add-to-cart":
      addToCart($_POST['id']*1,$_POST['amount']*1);
      header("location:customer_added_to_cart.php?id=".$_POST['id']);
      break;
   case "update-cart-item":
      $p = cartItemById($_POST['id']);
      $p->amount = $_POST['amount'];
      header("location:customer_bag.php");
      break;
   case "delete-cart-item":
      $cart = array_filter(getCart(),function($o){
         return $o->id!=$_POST['id'];
      });
      setCart($cart);
      header("location:customer_bag.php");
      break;
   case "reset-cart":
      resetCart();
      header("location:customer_confirm.php");
      break;
   default: die("Incorrect Action");
}