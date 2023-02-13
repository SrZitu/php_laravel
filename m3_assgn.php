<?php
//Reusable  PHP Function that can check Even & Odd Number And Return Decision
function evenOddTest($num){
if($num%2==0){
    return "Even Number";
}else{
    return "Odd Number";
}
}
echo evenOddTest(42). "\n";
echo evenOddTest(45);


//calculating Sum for the series . 1+2+3...…….100  
$sum=0;
for($i=1;$i<=100;$i++){
    $sum+=$i;
}
echo "\nSum of the  1+2+3...…….100 series is:"."{$sum}";