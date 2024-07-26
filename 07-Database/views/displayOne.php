<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
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
            <form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="">
                    Search By name:<input type="text" name="userName">*
                </div>

                <input type="submit" value="SUBMIT" class="subBtn">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (!empty($_POST['userName'])) {
                        if (!$product) {
                            echo "<div class='err' >not found</div>";
                        } else {
                            echo "<div class='' >successfully!</div>";
                            echo '<table border = 1>';
                            echo '<tr><td>id</td><td>name</td><td>price</td><td>type</td></tr>';
                            echo '<tr><td>', $product['id'], '</td><td>';
                            echo $product['name'], '</td><td>';
                            echo $product['price'], '</td><td>';
                            echo $product['type'], '</td></tr>';
                            echo '</table>';
                        }
                    }
                }

                ?>

            </form>

        </div>
    </div>
    <footer class="footer">
        about us
    </footer>
</body>

</html>