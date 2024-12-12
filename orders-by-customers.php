<?php
require_once("util-db.php");
require_once("model-orders-by-customers.php");

$pageTitle= "Orders by Customers";
include "view-header.php";
$orders = selectOrdersByCustomers($_POST['oid']);
include "view-orders-by-customers.php";
include "view-footer.php";
?>
