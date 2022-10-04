<?php
require 'connect_db.php';
$pdo = sql_connect();
$title = $_POST['title'];
$description = $_POST['description'];
$img = $_POST['img'];
$price = $_POST['price'];
// Create
if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `products` (`title`, `description`, `img`, `price`) VALUES(?,?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$title, $description, $img, $price]);
} else {
	echo 'error';
}
header("Location: /admin.php");
