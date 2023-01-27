<?php
//Divide the larger task into smaller task
//Keep the function clean and easily manageable and debugging is easy.
function tasA(){
    echo "A Task is done\n";
}
function tasB(){
    echo "B Task is done\n";
}
function tasC(){
    echo "C Task is done\n";
}
function tasD(){
    echo "D Task is done\n";
}
function largerTask(){
    tasA();
    tasB();
    tasC();
    tasD();
}
largerTask();

//Recursive Function
//Recursion is a programming solution in which a function calls itself.
function primeNumber($num,$i = 2){

if($num<=2){
    return ($num==2)?true:false;
}

if($num%$i==0){
    return false;
}
if ($i * $i > $num)
 return true;

}
$num=7;
if (primeNumber($num))
echo("Yes prime numer");
else
echo("Not prime");

    // PHP Program to find whether a Number
    // is Prime or Not using Recursion
    
    // Returns true if n is prime, else
    // return false.
    // i is current divisor to check.
    // function isPrime($n, $i = 2)
    // {
    //     // Base cases
    //     if ($n <= 2)
    //         return ($n == 2) ? true : false;
    //     if ($n % $i == 0)
    //         return false;
    //     if ($i * $i > $n)
    //         return true;
       
    //     // Check for next divisor
    //     $result=isPrime($n, $i + 1);
    //     echo var_dump($result);
    // }
    
    // // Driver Code
    // $n = 15;
    // if (isPrime($n))
    //     echo("Yes prime");
    // else
    //     echo("Not prime");
    
    // // This code is contributed by Ajit.
 
    //Fibbonacci Series (i tried it with recursive function)
function fibbo($num){
    if($num==0)
    {
        return 0;
    }
  
    else if($num==1||$num==2){
        return 1;
    }
   
    else
    return fibbo($num-1)+fibbo($num-2);

}
$n=4;
echo "\nFibbonacci series:\n";
for($i=0;$i<$n;$i++){
   printf("%d\n",fibbo($i));
}

/*Php variable scope
PHP has three types of variable scopes:
(i)Local variable: 
The variables that are declared within a function are called local variables for that function.
*/
echo "\n*****PHP SCOPES*****\n";
echo "\n*****Local Scope*****\n";
function testLOcal(){
    $var1=10;
    $var1++;
    echo "{$var1} \n";
}

testLOcal();
testLOcal();
/*
(ii)Global variable:
The global variables are the variables that are declared outside the function. 
These variables can be accessed anywhere in the program. 
To access the global variable within a function, 
use the GLOBAL keyword before the variable.
Another way to use the global variable inside the function is Using $GLOBALS instead of global
However, these variables can be directly accessed or used outside the function without any keyword.
Therefore there is no need to use any keyword to access a global variable outside the function.
*/
echo "\n*****Global Scope*****\n";
$var2=14;
function testGlobal(){
  global $var2;
   //echo $GLOBALS['var2'];  another way of printing global variable
   echo "$var2 \n";
   $var2++;
}
testGlobal();
testGlobal();
testGlobal();
/*
Static variable: It is the characteristic of PHP to delete the variable,
 once it completes its execution and the memory is free. 
 But sometimes we need to store the variables even after the completion of function execution. 
 To do this, we use static keywords and the variables are called static variables.

*/
echo "\n*****Static Scope*****\n";

function testStatic(){
  static $var3;
  $var3=$var3??0;
   //echo $GLOBALS['var2'];  another way of printing global variable
   $var3++;
   echo "$var3 \n";
}
testStatic();
testStatic();
testStatic();

//factorial with recursion
echo "\n*****Factorial with recursion*****\n";
function facto($numbr){
    if($numbr==0||$numbr==1){
        return 1;
    }else{
    return $numbr *facto($numbr-1);
    }
   
}
echo facto(3);