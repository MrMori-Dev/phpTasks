<?php
$requestPage = '/main/07-DataBase/controllers/index.php/';
$router = $_SERVER['REQUEST_URI'];
switch ($router) {
    case $requestPage . '':
        require_once ('../views/home.php');
        break;
    case $requestPage . 'home':
        require_once ('home.php');
        break;
    case $requestPage . 'one':
        $valid = true;
        include ('../models/product.php');
        $newProduct = new Product();
        $newProduct->connectDB();
        $product = $newProduct->fetch_one($_POST['userName']);
        $newProduct->closeDB();
        require_once ('../views/displayOne.php');
        break;

    case $requestPage . 'all':
        require_once ('../models/product.php');
        $newProduct = new Product();
        $products = $newProduct->fetch_all();
        require_once ('../views/displayAll.php');
        break;

    case $requestPage . 'add':
        require_once ('../models/product.php');
        $newProduct = new product();
        $newProduct->add_product();
        require_once ('../views/insert.php');
        break;
    default:
        http_response_code(404);
        require_once ('../views/404.php');
        break;
}
?>