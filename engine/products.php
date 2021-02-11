<?php

require_once "dbConnection.php";

function getProducts() {
    return sqlQueryAllRecords("SELECT * FROM products");
}

function getProductById(int $productId) {
    return sqlQueryOneRecord("SELECT * FROM products WHERE id = " . $productId);
}

?>
