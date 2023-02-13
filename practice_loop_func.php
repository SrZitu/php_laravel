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

for ($i = 1, $j = 1; $i <= 3, $j <= 3; ++$i, ++$j){
    printf("%d %d ", $i, $j);
  
}
echo PHP_EOL;
for($x=0;$x<=2;print ++$x){
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
echo "Factorial is:". isFactorial(6);
