
<?php
//How can you use the ternary operator in PHP to shorten this if statement?
$num=200;
// Using if statement
if ($num > 0) {
$result = 'positive';
}
elseif ($num < 0) 
{
$result = 'negative';
if( $num < -10) {
$result = 'value is below -10';
}
}
else 
{
$result = 'its zero';
}
echo $result;

//
$num1=200;
$result1=($num1>0)?'positive':(($num1<0)?(($num1<-10)?'value is below -10':"negative"):"its zero") ;
echo "\n";
echo $result1;