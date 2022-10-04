<?php
require_once '../scripts/template.php';
require_once '../scripts/filters.php';
$id = $_GET['id'];
$product = get_product($id);

$detail = template(
	'../views/detail.php',
	['product' => $product]
);

$layout = template('../layout.php', ['content' => $detail]);

echo ($layout);
