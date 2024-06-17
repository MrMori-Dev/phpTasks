<?php
// create array
$arr = array(1, 2, 3, 4);

$arr = [1, 2, 3, 4];

$arr = [
    1 => true,
    30 => 2020,
    "fruit" => "apple",
];

$arr = [];
$arr[0] = true;
$arr["name"] = "jon";
$arr["age"] = 24;

// add to array
function addItemToArray1(array &$x, ...$newItem)
{
    $x = array_merge($x, [...$newItem]);
    var_export($x);
    echo "<br>";
}

function addItemToArray2(array &$x, ...$newItem)
{
    foreach ($newItem as $value) {
        $x[] = $value;
    }
    var_export($x);
    echo "<br>";
}

function addItemToArray3(array &$x, $newItem, $keyOfItem)
{
    $x[$keyOfItem] = $newItem;
    var_export($x);
    echo "<br>";
}

function addItemToArray4(array &$x, ...$newItem)
{
    array_push($x, ...$newItem);
    var_export($x);
    echo "<br>";
}

// find elements in array
function findElemInArray($elem, array $Arr): bool
{
    return in_array($elem, $Arr);
}

function findElemInArray2(array $x, $value): bool|string|int
{
    $key = array_search($value, $x);
    return $key;
}

// remove elements from array
function deleteElemFromArr(array &$x)
{
    array_splice($x, 0, 1);
    var_export($x);
    echo "<br>";
}

function deleteElemFromArr2(array &$x, $key)
{
    unset($x[$key]);
    var_export($x);
    echo "<br>";
}

function deleteElemFromArr3(array &$x)
{
    array_pop($x);
    var_export($x);
    echo "<br>";
}

function deleteElemFromArr4(array &$x)
{
    array_shift($x);
    var_export($x);
    echo "<br>";
}

// extract keys from array
function extractKeys(array $x): array
{
    $y = array_keys($x);
    var_export($y);
    echo "<br>";
    return $y;
}

// extract values from array
function extractValues(array $x): array
{
    $y = array_values($x);
    var_export($y);
    echo "<br>";
    return $y;
}

// merging two array
function mergingTwoArr(array $x, array $y): array
{
    $z = array_merge($x, $y);
    var_export($z);
    echo "<br>";
    return $z;
}

// get diffrence between 2 array
function getDifferentBetweenTwoArr(array $x, array $y): array
{
    $z = array_diff($x, $y);
    var_export($z);
    echo "<br>";
    return $z;
}

// using array interect key
function arrayIntrect(array $x, array $y): array
{
    $result = array_intersect_key($x, $y);
    var_export($result);
    echo "<br>";
    return $result;
}