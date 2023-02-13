<?php
//function name should be meaningfull
function isEven($n)
{ //parameter
    if ($n % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
//Type Hinting or type check  into a function 

function isFactorial(int $x)
{ //type hinting
    // if(gettype($x)!="integer"){//before php 7 we write like this to indicate the invalid argument
    //     return "invalid";
    // }

    $result = 1;
    for ($i = $x; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}
//default value of a functional parameter or optional parameter
function serve($foodType = "coffe", $quantity = "1 unit")
{ //1 takey deafult value dile onnotako dite hbe
    echo "\n{$quantity} {$foodType} is served ";
}

//type declaration or type hinting
function sum(int $x, int $y, int $z): int
{ //return type is declared here
    // return "abcd";
    return $x + $y + $z;
}
