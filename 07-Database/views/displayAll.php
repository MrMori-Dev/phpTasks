<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">

    <title>Home</title>
</head>

<body>
    <header class="header">
        <h1 class="h1">Online Shop</h1>
        <div class="btns">
            <a href="../index.php"><button class="hBtn">Home</button></a>
        </div>
    </header>
    <div class="container">
        <div class="index">
            <?php
            echo '<table border = 20>';
            echo '<tr><td>id</td><td>name</td><td>price</td><td>type</td></tr>';
            foreach ($products as $product) {
                echo '<tr><td>', $product['id'], '</td><td>';
                echo $product['name'], '</td><td>';
                echo $product['price'], '</td><td>';
                echo $product['type'], '</td></tr>';
            }
            echo '</table>';
            ?>
        </div>
    </div>
    <footer class="footer">
        about us
    </footer>
</body>

</html>