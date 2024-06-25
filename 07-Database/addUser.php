<?php

include ('connect.php');


$userName = $phoneNumber = $email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["userName"]) && !empty($_POST["phoneNumber"]) && !empty($_POST["email"])) {
        $userName = $_POST["userName"];
        $phoneNumber = $_POST["phoneNumber"];
        $email = $_POST["email"];
    }
    try {

        $query = 'INSERT INTO client_statistics(`name` ,phone, email) VALUES (?, ?, ?)';
        $statement = $conn->prepare($query);
        $statement->bindParam(1, $userName);
        $statement->bindParam(2, $phoneNumber);
        $statement->bindParam(3, $email);
        $statement->execute();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}