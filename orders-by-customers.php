<?php
require_once("util-db.php");
require_once("model-orders-by-customers.php");

$pageTitle= "Transactions by Customers";
include "view-header.php";
$orders = selectOrdersByCustomers($_POST['cid']);
include "view-orders-by-customers.php";
include "view-footer.php";
?>
