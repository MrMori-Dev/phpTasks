<?php
include('funcs.php');

$arr = [];
var_dump($arr);
echo "<br><br>";

addItemToArray1($arr, 1, 2, "morteza");
addItemToArray2($arr, [3, 4, 5, 6]);
addItemToArray3($arr, "true", "bool");
addItemToArray4($arr, 3, 5, "ali", "finish");
echo "<br>";

echo findElemInArray("ali", $arr) . "<br>";
var_export(findElemInArray2($arr, "bool"));
echo "<br><br>";

deleteElemFromArr($arr);
deleteElemFromArr2($arr, 1);
deleteElemFromArr3($arr);
deleteElemFromArr4($arr);
echo "<br>";

$keys = extractKeys($arr);
$values = extractValues($arr);
echo "<br>";

$arr2 = mergingTwoArr($keys, $values);
echo "<br>";

getDifferentBetweenTwoArr([2, 3, 4], [2, 3]);
echo "<br>";

arrayIntrect([1, 2, 3, 4, 6, 7, 8, 9], [3, 4, 5, 6, 7, 8, 9]);