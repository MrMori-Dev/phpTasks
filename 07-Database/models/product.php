<?php
include ('dataBase.php');


class product extends baseModel
{
    private $productName;
    private $price;
    private $type;
    public function initializeProduct(): bool
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["productName"]) && !empty($_POST["price"]) && !empty($_POST["type"])) {
                $this->productName = $_POST["productName"];
                $this->price = $_POST["price"];
                $this->type = $_POST["type"];
            }
            return true;
        }
        return false;

    }
    public function add_product()
    {

        $valid = $this->initializeProduct();
        if ($valid) {
            $this->connectDB();
            $product = R::dispense('products');
            $product->name = $this->productName;
            $product->price = $this->price;
            $product->type = $this->type;
            $id = R::store($product);
            $this->closeDB();
        }

    }

    public function fetch_one($name)
    {
        $products = R::findAll('products');
        foreach ($products as $product) {
            if ($product['name'] == $name) {
                return $product;
            }
        }

        return false;
    }

    public function fetch_all()
    {
        $this->connectDB();
        $products = R::findAll('products');
        $this->closeDB();
        return $products;
    }
}