<?php
require_once 'scripts/template.php';

session_start();
// session_destroy();

if (!isset($_SESSION['admin'])) {
	$content = template('views/login.php');;
} else {
	require_once 'scripts/get_products.php';
	$table = template('components/table.php', ['products' => $products]);
	$content = template('views/adminView.php', ['content' => $table]);
}
$page = template('layout.php', ['content' => $content]);
echo $page;
