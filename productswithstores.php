<?php
require_once("util-db.php");
require_once("model-productswithstores.php");

$pageTitle= "Products With Stores";
include "view-header.php";
$products = selectProducts();
include "view-productswithstores.php";
include "view-footer.php";
?>
