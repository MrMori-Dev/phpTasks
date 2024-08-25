<?php

$valid = true;
use App\product;
$newProduct = new product();
$newProduct->connectDB();
require_once('./views/displayOne.php');