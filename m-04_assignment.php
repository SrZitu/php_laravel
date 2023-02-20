<?php
/*==================================================================================
1.Write a PHP function to sort an array of strings by their length, in ascending order. 
(Hint: You can use the usort() function to define a custom sorting function.)
==================================================================================*/
$strg_array = array("Sadman", "Sakib", "Ziad", "Musfiqur", "Zisan", "Sazzadur_rahman", "Sara");
usort($strg_array, function ($a, $b) {
    return  strlen($a) - strlen($b);
});
//displaying the sorted string by their length in ascending order 
foreach ($strg_array as $data) {
    echo  $data . "\n";
}
/*
output:

Ziad
Sara
Sakib
Zisan
Sadman
Musfiqur
Sazzadur_rahman

*/


/*==================================================================================
2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
==================================================================================*/
function strngConcat($string1, $string2)
{
    $concat = $string1 . " " . $string2;
    return $concat;
}
$string1 = "Hello php learner";
$string2 = "this is your string concatanation";
echo strngConcat($string1, $string2);
echo PHP_EOL;
/* 
output:

Hello php learner this is your string concatanation 

*/


/*==================================================================================
3.Write a PHP function to remove the first and last element from an array 
and return the remaining elements as a new array.
==================================================================================*/
function removeFirstAndLast($crickter)
{
    return array_splice($crickter, 1, -1);
}

$crickter = array("Tamim", "Sakib", "Musfiq", "sachin", "sehwag", "rahul", "ganguly", "yuvraj");
print_r(removeFirstAndLast($crickter));

/*
output:
Array
(
    [0] => Sakib
    [1] => Musfiq
    [2] => sachin
    [3] => sehwag
    [4] => rahul
    [5] => ganguly
)
*/


/*==================================================================================
4.Write a PHP function to check if a string contains only letters and whitespace.
==================================================================================*/

function validationCheck($string)
{
    if (!preg_match("/^[a-zA-Z\s]+$/", $string)) {
        return  $errors[] = "Name must only contain letters!";
    } else {
        return "valid input";
    }
}

$string = "hello php learner ";
echo validationCheck($string);
echo PHP_EOL;

//  output: valid input

/*==================================================================================
5.Write a PHP function to find the second largest number in an array of numbers.
==================================================================================*/

function findSecondLargeNumber($array)
{
    rsort($array);
    print_r($array);
    return $array[1];
}
$array = array(12, 44, 56, 77, 88, 92, 123, 95, 1234, 456);
echo findSecondLargeNumber($array); 
/*output:
 
456
 */
