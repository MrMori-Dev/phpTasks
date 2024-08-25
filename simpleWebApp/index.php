<?php
include 'vendor/autoload.php';
echo '1';
$requestPage = '/main/simpleWebApp/index.php/';
$router = $_SERVER['REQUEST_URI'];
switch ($router) {
    case $requestPage:
        require_once('views/home.php');
        break;
    case $requestPage . 'home':
        include('views/home.php');
        break;
    case $requestPage . 'one':
        require_once('controllers/one.php');
        break;

    case $requestPage . 'all':
        require_once('controllers/All.php');
        break;

    case $requestPage . 'add':
        require_once('controllers/add.php');
        break;
    default:
        http_response_code(404);
        require_once('views/404.php');
        break;
}
?>