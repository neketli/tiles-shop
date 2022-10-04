<?php
require 'connect_db.php';
$pdo = sql_connect();
$title = $_POST['title'];
$description = $_POST['description'];
$full_description = $_POST['full_description'];
$price = $_POST['price'];
$type = $_POST['type'];

$img = $_FILES['img']['name'];
$imgPath = "../assets/tiles/" . basename($img);

if (move_uploaded_file($_FILES['img']['tmp_name'], $imgPath)) {
	echo "success";
}

// Create
if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `products` (`title`, `description`, `full_description`, `img`, `price`, `type`) VALUES(?,?,?,?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$title, $description, $full_description, $img, $price, $type]);
} else {
	echo 'error';
}
header("Location: /admin.php");
