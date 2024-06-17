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
        <?php
        $userName = $phoneNumber = $email = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userName = $_POST["userName"];
            $phoneNumber = $_POST["phoneNumber"];
            $email = $_POST["email"];
        }
        ?>
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
            include ("user.php");
            $newUser = new User($userName, $phoneNumber, $email);
            $myfile = fopen("info.txt", "a+");
            fwrite($myfile, $newUser->get_userName() . "\n");
            fwrite($myfile, $newUser->get_phoneNumber() . "\n");
            fwrite($myfile, $newUser->get_email() . "\n");
            fclose($myfile);
            $myfile = fopen("info.txt", "r");
            // echo fread($myfile, filesize("info.txt"));
            while (!feof($myfile)) {
                echo fgets($myfile) . "<br>";
            }
            ?>
        </div>
        <!-- <input type="btn" value="SUBMIT" class="sub"> -->

    </div>
</body>

</html>