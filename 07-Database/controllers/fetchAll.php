<?php
require_once ('../models/product.php');
$newProduct = new Product();
$products = $newProduct->fetch_all();