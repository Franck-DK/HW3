<?php
require_once("util-db.php");
require_once("model-products-charts.php");

$pageTitle= "Product Chart";
include "view-header.php";

$products = selectProducts();
include "view-products-chart.php";
include "view-footer.php";
?>
