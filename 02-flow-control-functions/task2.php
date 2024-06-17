<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // if and else func
    function avgForHeight($height)
    {
        if ($height < 150)
            echo "he is short <br>";
        else if ($height > 170)
            echo "he is tall <br>";
        else
            echo "he is average height <br>";

    }
    $h = 165;
    avgForHeight($h);
    // loop func
    function sum(...$nums) : int {
        $temp = 0;
        $len = count($nums);
        for ($i = 0; $i < $len; $i++){
            $temp += $nums[$i];
        }
        return $temp;
    }
    $x = sum(2, 2, 3, 4, 5);
    echo "2 + 2 + 3 + 4 + 5 = $x <br>";
    // switch and case
    include ("season.php");
    $season = "spring";
    whatSeason($season);
    ?>
</body>

</html>

