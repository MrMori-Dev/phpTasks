<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ONE</title>
</head>

<body>
    <div class="foorm">
        <form class="rForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="fItem">
                Search By name:<input type="text" name="userName">*
            </div>

            <input type="submit" value="SUBMIT" class="sub">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!empty($_POST['userName'])) {
                    include ('../controllers/fetchOne.php');
                    if (!$product) {
                        echo "<div class='sub err' >not found</div>";
                    } else {
                        echo "<div class='sub' >successfully!</div>";
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
</body>

</html>