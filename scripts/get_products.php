<?php
require 'connect_db.php';
$pdo = sql_connect();
$products = $pdo->query('SELECT * FROM products')->fetchAll();
