<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>INSERT</title>
</head>

<body>
    <div class="foorm">
        <form class="rForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h1 class="h1">Insert Product</h1>
            <div class="fItem">
                productName:<input type="text" name="productName">*
            </div>
            <br>
            <div class="fItem">
                price:<input type="text" name="price">*
            </div>
            <br>
            <div class="fItem">
                type:<input type="text" name="type">*
            </div>

            <input type="submit" value="SUBMIT" class="btn">

            <a href="displayAll.php"><input type="button" value="displayAll" class="btn"></a>
            <a href="displayOne.php"><input type="button" value="displayOne" class="btn"></a>

        </form>
    </div>
</body>

</html>