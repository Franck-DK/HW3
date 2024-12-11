<?php
require_once("util-db.php");
require_once("model-stores.php");

$pageTitle= "Stores";
include "view-header.php";
$orders = selectStores();
include "view-stores.php";
include "view-footer.php";
?>
