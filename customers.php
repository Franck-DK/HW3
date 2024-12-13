<?php
require_once("util-db.php");
require_once("model-customers.php");

$pageTitle= "Customers";
include "view-header.php";


if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
    if(insertCustomers($_POST['cfname'],$_POST['clname'],$_POST['cphone'],$_POST['cemail'])) {
     echo '<div class="alert alert-success" role="alert">Customer Added</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;

    case "Edit":
    if(updateCustomers($_POST['cfname'],$_POST['clname'],$_POST['cphone'],$_POST['cemail'],$_POST['cid'])) {
     echo '<div class="alert alert-success" role="alert">Customer Edited</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;

     case "Delete":
    if(deleteCustomer($_POST['cid'])) {
     echo '<div class="alert alert-success" role="alert">Customer deleted</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
  }
}

$customers = selectCustomers();
include "view-customers.php";
include "view-footer.php";
?>
