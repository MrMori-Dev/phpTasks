<?php
$valid = true;
include('../models/product.php');
$newProduct = new Product();
$newProduct->connectDB();
$product = $newProduct->fetch_one($_POST['userName']);
$newProduct->closeDB();
