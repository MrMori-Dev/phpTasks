<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include ('../controllers/fetchall.php');
    echo '<table border = 1>';
    echo '<tr><td>id</td><td>name</td><td>price</td><td>type</td></tr>';
    foreach ($products as $product) {
        echo '<tr><td>', $product['id'], '</td><td>';
        echo $product['name'], '</td><td>';
        echo $product['price'], '</td><td>';
        echo $product['type'], '</td></tr>';
    }
    echo '</table>';
    ?>
</body>

</html>