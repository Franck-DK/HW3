<?php
require_once("util-db.php");
require_once("model-productswithstores.php");

$pageTitle= "Products With Stores";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
    if(insertInventory($_POST['pid'],$_POST['sid'],$_POST['date'], $_POST['quantity'])) {
     echo '<div class="alert alert-success" role="alert">Inventory Added</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;

    case "Edit":
    if(updateInventory($_POST['pid'],$_POST['sid'],$_POST['date'],$_POST['quantity'], $_POST['iid'])) {
     echo '<div class="alert alert-success" role="alert">Inventory Edited</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;

     case "Delete":
    if(deleteInventory($_POST['iid'])) {
     echo '<div class="alert alert-success" role="alert">Inventory deleted</div>';
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
