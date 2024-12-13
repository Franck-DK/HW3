<?php
require_once("util-db.php");
require_once("model-products.php");

$pageTitle= "Products";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
    if(insertProducts($_POST['pname'],$_POST['pdesc'],$_POST['pprice'])) {
     echo '<div class="alert alert-success" role="alert">Product Added</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;

    case "Edit":
    if(updateProducts($_POST['pname'],$_POST['pdesc'],$_POST['pprice'],$_POST['pid'])) {
     echo '<div class="alert alert-success" role="alert">Product Edited</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;

     case "Delete":
    if(deleteProducts($_POST['pid'])) {
     echo '<div class="alert alert-success" role="alert">Product deleted</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
  }
}
$products = selectProducts();
include "view-products.php";
include "view-footer.php";
?>
