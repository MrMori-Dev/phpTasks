<?php
include('orm/rb.php');
class baseModel
{
    // public function __construct()
    // {
    //     $this->conn = new PDO($this->dsn, $this->userName, $this->password);
    //     $this->sql = 'SELECT * FROM `products` ORDER BY `name`';
    // }
    function connectDB()
    {
        try {
            R::setup('mysql:host=localhost;dbname=testdb', 'root', '');
        } catch (Exception $e) {
            echo $e;
        }
    }
    function closeDB()
    {
        R::close();
    }
}