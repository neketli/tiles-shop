<?php
require 'connect_db.php';
$pdo = sql_connect();

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$full_decription = $_POST['full_description'];
$img = $_POST['img'];
$price = $_POST['price'];
$type = $_POST['type'];

// update
if (isset($_POST['submit'])) {
	$sqll = "UPDATE products SET title=?, description=?, full_description=?, img=?, price=?, type=? WHERE id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$title, $description, $full_decription, $img, $price, $type, $id]);
} else {
	echo 'error';
}

header("Location: /admin.php");
