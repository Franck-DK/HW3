<?php
require_once("util-db.php");
require_once("model-products-chart.php");

$pageTitle= "Make-Model Chart";
include "view-header.php";

$products = selectProducts();
include "view-products-chart.php";
include "view-footer.php";
?>
