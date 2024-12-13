<?php
require_once("util-db.php");
require_once("model-stores.php");

$pageTitle= "Stores";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
    if(insertStores($_POST['sname'],$_POST['slocation'])) {
     echo '<div class="alert alert-success" role="alert">Store Added</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;

    case "Edit":
    if(updateStores($_POST['sname'],$_POST['slocation'],$_POST['sid'])) {
     echo '<div class="alert alert-success" role="alert">Store Edited</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;

     case "Delete":
    if(deleteStores($_POST['sid'])) {
     echo '<div class="alert alert-success" role="alert">Store deleted</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
  }
}

$stores = selectStores();
include "view-stores.php";
include "view-footer.php";
?>
