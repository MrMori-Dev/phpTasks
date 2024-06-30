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
            $valid = true;
            require_once ('manager.php');
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!empty($_POST['userName'])) {
                    $valid = $testStaff->fetch_one($_POST['userName']);
                }
            }
            if (!$valid) {
                echo "<div class='sub err' >not found</div>";
            }

            ?>
        </form>
</body>

</html>