<?php
require_once('manager.php');
$testStaff->add_user();
?>


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
    </div>
</body>

</html>