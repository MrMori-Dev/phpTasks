<?php
$requestPage = '/main/08-router/index.php/';
$router = $_SERVER['REQUEST_URI'];
echo $router . '<br>';
switch ($router) {
    case $requestPage . 'home':
    case $requestPage:
        require_once 'views/home.php';
        break;
    case $requestPage . 'about':
        require_once 'views/about.php';
        break;
    case $requestPage . 'info':
        require_once 'views/info.php';
        break;
    default:
        require_once 'views/404.php';
        break;
}
