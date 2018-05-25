<?php
// update_product.php <id> <new-name>
require_once "bootstrap.php";
require_once "functions.php";

check_input(3, ["id", "new-name"]);
$id = $argv[1];
$newName = $argv[2];

$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "Product $id does not exist.\n";
    exit(1);
}
$oldName = $product->getName();
$product->setName($newName);
$entityManager->flush();

echo "Product with id $id was changed from $oldName to $newName";
