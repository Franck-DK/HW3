<?php
require_once("util-db.php");
require_once("model-orders-by-stores.php");

$pageTitle= "Orders by Stores";
include "view-header.php";
$orders = selectOrdersByStores($_POST['oid']);
include "view-orders-by-stores.php";
include "view-footer.php";
?>
