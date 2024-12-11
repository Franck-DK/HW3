<?php
require_once("util-db.php");
require_once("model-products-by-stores.php");

$pageTitle= "Products by Stores";
include "view-header.php";
$stores = selectProductsByStores($_GET['id']);
include "view-products-by-stores.php";
include "view-footer.php";
?>
