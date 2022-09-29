<?php
require_once 'scripts/template.php';
require_once 'scripts/get_products.php';


$productList = template('views/products.php', ['products' => $products]);

$layout = template('layout.php', ['content' => $productList]);

echo ($layout);
