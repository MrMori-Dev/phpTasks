<?php
$userName = 'root';
$password = '';

$dsn = 'mysql:host=localhost;dbname=users';
$conn = new PDO($dsn, $userName, $password);
$sql = 'SELECT * FROM `client_statistics` ORDER BY `name`,`email`';