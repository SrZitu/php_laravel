<?php
//learning php function
include_once "functions.php";
$n=17 ;
if(isEven($n)){//argument
    echo "{$n} is an even number\n";
}else{
    echo "{$n} is an odd number\n";
}

//Type Hinting or type check  into a function 
$x=4;
echo "Factorial of {$x} is:" .isFactorial($x);

//default value of a functional parameter
$qty="4 unit";
$foodtype="Polao";
serve($foodtype,$qty);

//type declaration or type hinting
$i=11;
$j=12;
$k=13;
echo PHP_EOL;
echo "sum is :" . sum($i,$j,$k);