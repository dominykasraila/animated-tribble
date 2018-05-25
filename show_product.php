<?php
// show_product.php <id>
require_once "bootstrap.php";
require_once "functions.php";

check_input(2, ["id"]);

$id = $argv[1];
$product = $entityManager->find('Product', $id);

if ($product == null) {
    echo "No product found with id $id.";
    exit;
}

echo $product->getName();
