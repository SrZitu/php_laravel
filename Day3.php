<?php
$n=12;
$o=017;
$h=0x1B;

printf("the number is %d and %d and %d\n ",$n,$o,$h); //converting into decimal

printf("The binary quivalent of  %d is %b \n",12,12);
printf("The hexadecimal equivalent of  %d is %X \n",12,12);
printf("The octal quivalent of  %d is %o \n",12,12);

//Printf function er jadu
$fname="sazzadur";
$lname="Zitu";
$middleName="Rahman";

printf("My name is %s %s %s \n",$fname,$lname,$middleName);
//%1$s indicating that it should be first and %2$s indicating it should be in second and so on
//single cote is use in this kind of operation
printf('My name is %1$s %3$s %2$s',$fname,$lname,$middleName); 
echo "\n";

//In case Format specifier we can also use this trick to avoid repeatation  
printf('The binary quivalent of  %1$d is %1b ',12); //needed to take just one parameter only
echo  "\n";

//taking decimal upto 2 digit
$n=45.126;
printf("%.2f",$n);
echo  "\n";
//same digit pojonto nibo dutai tahole easy sum or subtract kora jabe choke dekhei
$m=123.3253; 
$n=27.155;
printf("%07.2f\n %07.2f \n",$m,$n);

//sprintf returns a value which can be stored in a variable
$output=sprintf('My name is %1$s %3$s %2$s',$fname,$lname,$middleName); 
echo $output; 
echo "\n";
//we can do further operation with this $output variable 
//sometime we need to manipulate our variable in that case this would be helpful
echo(strtoupper($output)); //out put is now in uppercase
echo "\n";
//conditional  logic
//== means equal and = means assignment operator
$food="rui";
if("salmon"==$food || "tuna"==$food){
    echo "{$food} contains vitamin D";
}elseif("apple"==$food){
    echo"Apple doesn't contain vitamin D";
}
else{
    echo"we don't know if {$food} contains vitamin D\n";
}

// checking leap year or not
//year is divisible by 4 and 400 then it is leap year
//if it is divivisible by 100 then not leap year
$year=2000;
if($year%4==0 && ($year%100 !=0||$year%400==0)){
    echo "{$year} is a leap year\n";
}else{
    echo "{$year} is not leap year\n";
}

//Nested if else and code readability
//sometimes nested condition increase code readability
$condition1=true;
$condition2=True;
$condition3=false;

if($condition1&& $condition2 && $condition3){
    echo "Hello";
}elseif($condition1 && $condition2){
    echo "no 1";
}elseif($condition1){
    echo "no 2";
}else{
    echo "no 3";
}

//Ternary Operator
$n=12;
$numberis= (12==$n)? "Twelve": "A number";
echo "{$numberis}\n";
echo PHP_EOL;

$result=($n%2==0)?"even":"odd";
echo $result;
echo PHP_EOL;

$num=11;
//sothik maner jnno extra bracket add korsi first colon er por
$trnaryTest=(11==$num)?"Equal":((13==$num)?"Eual2":"Equal3"); 

echo "{$trnaryTest}";