<?php


namespace App;
include('orm/rb.php');

class baseModel{
    function connectDB()
    {
        try {
            \R::setup('mysql:host=localhost;dbname=testdb', 'root', '');
        }   catch (\Exception $e){
            echo $e;
        }
    }
}