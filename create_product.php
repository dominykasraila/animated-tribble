<?php
// create_product.php <name>
require_once "bootstrap.php";
require_once "functions.php";

check_input(2, ["name"])
if ($argc != 2) {
    echo "Usage: \n  " . $argv[0] . " <name>";
    exit;
}

$newProductName = $argv[1];

$product = new Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo sprintf("Created product %s with ID %d", $product->getName(), $product->getId());
