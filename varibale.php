<?php
$age=29;
$myName="zitu";
$decl="age";
echo $$decl; //$decl referaning age and with extra $ it becomes $age and it shows 29. 
echo "\nMy name is {$myName} \n age is {$age}\n";

//working with constant
define('PI',3.1416);
//we can't redefine constant
//using concatanation we can print constant
echo " \nThe Value of PI=".PI ."\n"; 
//another method without concatenation
$constant="constant";
echo "The value of PI ={$$constant('PI')}\n";
//third method
echo constant ('PI'); 

//different printing technique and var_dump
$fName="sazzadur";
$lName="zitu";
//var_dump shows the information about the variables
var_dump($fName,$lName);
echo "my first name is $fName". " last name is $lName \n";
echo "my first name is {$fName} last name is {$lName} \n";
printf("my first name is %s  %s last name is %s\n ",$fName,"middle Rahman",$lName);
printf("my first name is %s   last name is %s \n",strtoupper($fName),strrev($lName));

//Multiple sum division and substraction in php follows BODMAS rule
$num1=60;
$num2=2;
$num2+=$num1;
echo $num2 ."\n";
$i=5;
$j=$i++;
echo "j=$j i=$i\n";
/*$j=$i++;means
$j=$i;
$i=$i+1;
*/
$n=5;
$m=++$n;
echo "m=$m n=$n\n";
/*$m=++$n;
 $n=$n+1
$m=$n;
*/
//git test