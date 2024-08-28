<?php
require_once 'vendor/autoload.php';
use models\Article;
use models\Product;

$test = new Article();
$test->printArticle();

$test = new Product();
$test->printProduct();


$user = new User();
$user->printUser();

$comment = new Comment();
$comment->printComment();