<?php
require 'connect_db.php';
$pdo = sql_connect();
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$img = $_POST['img'];
$price = $_POST['price'];
// update
if (isset($_POST['submit'])) {
	$sqll = "UPDATE products SET title=?, description=?, img=?, price=? WHERE id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$title, $description, $img, $price, $id]);
} else {
	echo 'error';
}

header("Location: /admin.php");
