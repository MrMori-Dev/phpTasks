<?php

class Manager
{
    protected $userName = 'root';
    protected $password = '';
    protected $dsn = 'mysql:host=localhost;dbname=users';
    protected $conn;
    protected $sql;
    public function __construct()
    {
        $this->conn = new PDO($this->dsn, $this->userName, $this->password);
        $this->sql = 'SELECT * FROM `client_statistics` ORDER BY `name`,`email`';
    }
}
class Staff extends Manager
{
    public function add_user()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST["userName"]) && !empty($_POST["phoneNumber"]) && !empty($_POST["email"])) {
                $userName = $_POST["userName"];
                $phoneNumber = $_POST["phoneNumber"];
                $email = $_POST["email"];
            }
            try {
                $query = 'INSERT INTO client_statistics(`name` ,phone, email) VALUES (?, ?, ?)';
                $statement = $this->conn->prepare($query);
                $statement->bindParam(1, $userName);
                $statement->bindParam(2, $phoneNumber);
                $statement->bindParam(3, $email);
                $statement->execute();

            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

        }
    }


    public function fetch_one($name) : bool
    {
        foreach ($this->conn->query($this->sql, PDO::FETCH_ASSOC) as $row) {
            if ($row['name'] == $name) {
                echo '<table border = 1>';
                echo '<tr><td' . implode('</td><td>', $row) . '</td></tr>';
                echo '</table>';
                return true;
            }
        }
        return false;
    }

    public function fetch_all()
    {
        echo '<table border = 1>';
        foreach ($this->conn->query($this->sql, PDO::FETCH_ASSOC) as $row) {
            echo '<tr><td' . implode('</td><td>', $row) . '</td></tr>';
        }
        echo '</table>';
    }
}
$testStaff = new Staff();


?>