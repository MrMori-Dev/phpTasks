<?php

use App\product;
$newProduct = new Product();
$products = $newProduct->fetch_all();
require_once('./views/displayAll.php');