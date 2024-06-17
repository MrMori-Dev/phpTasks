<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // if and else
    $height = 165;
    if($height < 150)
        echo "he is short";
    else if($height > 170)
        echo "he is tall";
    else
        echo "he is average height";
    ?>
    <br>

    <?php
    // loop 
    for ($i=0; $i < 10; $i++) { 
        echo "$i";
    }?>
    <br>

    <?php
    // switch and case
    $season = "spring";
    include("season.php");
    ?>
</body>
</html>