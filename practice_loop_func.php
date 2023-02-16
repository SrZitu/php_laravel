<?php
$x = 5;
$y = 10;
function fun()
{
    $y = $GLOBALS['x'] + $GLOBALS['y'];
}
fun();
echo $y;

echo PHP_EOL;
//What will be the output of the following PHP program?

for ($i = 1, $j = 1; $i <= 3, $j <= 3; ++$i, ++$j) {
    printf("%d %d ", $i, $j);
}
echo PHP_EOL;
for ($x = 0; $x <= 2; print ++$x) {
    print ++$x;
}
echo PHP_EOL;
//What will be the output of the following PHP program?
$a = 100;
if ($a > 10)
    printf("PHP Quiz"); // In if else if one condition is satisfied then no other condition is checked.
else if ($a > 20)
    printf("PHP MCQ");
else if ($a > 30)
    printf("PHP Program");
echo PHP_EOL;

//call by value
function adder(&$str2)
{
    $str2 .= 'Call By Value';
}
$str = 'Hello ';
adder($str);
echo $str;

echo PHP_EOL;

function increment(&$i)
{
    $i++;
    echo $i;
    echo PHP_EOL;
}
$i = 10;
increment($i);
echo $i;
echo PHP_EOL;

include_once("functions.php");
echo "Factorial is:" . isFactorial(6);
echo PHP_EOL;

//pairs of integers in array that is equal to target sum
function integerExist($array, $target_sum)
{

    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] + $array[$j] == $target_sum) {
                return "True";
            }
        }
    }
    return "false";
}
$array = array(5, 7, 1, 2, 8, 4, 3);
$target_sum = 8;
$result = integerExist($array, $target_sum);
echo "result is:" . "{$result}";
echo PHP_EOL;

//Count all distinct pairs with difference equal to k
function defferenceExist($array, $k)
{
    $count = 0;

    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] - $array[$j] == $k || $array[$j] - $array[$i] == $k) {
                $count++;
            }
        }
    }
    return $count;
}
$array = array(8, 12, 16, 4, 0, 20);
$k = 4;
$result = defferenceExist($array, $k);
echo "Difference count pairs is:" . "{$result}";
echo PHP_EOL;


// count pairs in given sum
function pairCount($arr, $sum)
{
    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] + $arr[$j] == $sum) {
                $count++;
            }
        }
    }
    return $count;
}
$arr = array(1, 5, 7, -1, 5);
$sum = 6;
echo "Count of pair in given sum is:" . pairCount($arr, $sum);
echo PHP_EOL;


//Find all pairs with a given sum
function pairToTargetSum($array1, $array2, $target_sum)
{

    for ($i = 0; $i < count($array1); $i++) {
        for ($j = 0; $j < count($array2); $j++) {
            if ($array1[$i] + $array2[$j] == $target_sum) {
                echo $array1[$i] . " " . $array2[$j] . "\n";
            }
        }
    }
}
$array1 = array(1, 2, 3, 7, 5, 4);
$array2 = array(0, 7, 4, 3, 2, 1);
$target_sum = 8;
echo "All pairs of given sum\n";
$result = pairToTargetSum($array1, $array2, $target_sum);
echo "{$result}";
echo PHP_EOL;


//Find whether an array is subset of another array
function isSubArray($array1, $array2)
{

    for ($i = 0; $i < count($array1); $i++) {
        for ($j = 0; $j < count($array2); $j++) {
            if ($array1[$i] == $array2[$j]) {
                return true;
            }
        }
    }
    return false;
}
$array1 = array(11, 1, 13, 21, 3, 7);
$array2 = array(2, 6, 1);
$target_sum = 8;
if (isSubArray($array1, $array2))
    echo "arr2[] is subset of array 1";
else
    echo "arr2[] is not subset of array 1";

echo PHP_EOL;

//Given two arrays count all pairs whose sum is an odd number

function allPairsSumOdd($array1, $array2)
{
    $odd1 = $odd2 = 0;
    $even1 = $even2 = 0;

    for ($i = 0; $i < count($array1); $i++) {
        if ($array1[$i] % 2) {
            $even1++;
        } else {
            $odd1++;
        }
    }
    for ($j = 0; $j < count($array2); $j++) {
        if ($array2[$j] % 2) {
            $even2++;
        } else {
            $odd2++;
        }
    }
    $pairs = min($even1, $odd2) + min($even2, $odd1);
    return $pairs;
}
$array1 = array(9, 14, 6, 2, 11);
$array2 = array(8, 4, 7, 20);

$result = allPairsSumOdd($array1, $array2);
echo "Resulted pair is:" . $result;
