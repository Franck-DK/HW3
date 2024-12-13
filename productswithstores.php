<?php
require_once("util-db.php");
require_once("model-productswithstores.php");

$pageTitle= "Products With Stores";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
    if(insertProductsWithStores($_POST['pname'],$_POST['sid'],$_POST['sname'],$_POST['slocation'],$_POST['squantity'])) {
     echo '<div class="alert alert-success" role="alert">Product Added</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;

    case "Edit":
    if(updateProductsWithStores($POST['pname'],$_POST['sname'],$_POST['slocation'],$_POST['squantity'],$_POST['pid'])) {
     echo '<div class="alert alert-success" role="alert">Product Edited</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;

     case "Delete":
    if(deleteProductsWithStores($_POST['pid'])) {
     echo '<div class="alert alert-success" role="alert">Store deleted</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
  }
}

$products = selectProducts();
include "view-productswithstores.php";
include "view-footer.php";
?>
