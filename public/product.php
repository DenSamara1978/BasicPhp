<?php

require_once "../engine/products.php";

$product = getProductById($_GET["id"]);

include_once "../views/product.php";

?>

