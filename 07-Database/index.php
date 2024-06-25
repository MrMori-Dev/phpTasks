<?php
require_once ('addUser.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="foorm">
        <form class="rForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h1 class="h1">Register Form</h1>
            <div class="fItem">
                UserName:<input type="text" name="userName">*
            </div>
            <br>
            <div class="fItem">
                PhoneNumber:<input type="text" name="phoneNumber">*
            </div>
            <br>
            <div class="fItem">
                Email:<input type="text" name="email">*
            </div>

            <input type="submit" value="SUBMIT" class="sub">

        </form>

        <div class="out">
            <?php
            include ("connect.php");
            echo '<table border = 1>';
            foreach ($conn->query($sql, PDO::FETCH_ASSOC) as $row) {
                echo '<tr><td' . implode('</td><td>', $row) . '</td></tr>';
            }
            echo '</table>';
            ?>
        </div>

    </div>
</body>

</html>