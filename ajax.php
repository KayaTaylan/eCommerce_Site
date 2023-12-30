<?php
include 'get_products.php';

$get_products = new get_products();
$products = json_encode($get_products->initialize());

echo $products;
?>