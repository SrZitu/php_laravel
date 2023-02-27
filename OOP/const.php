<?php
/*===================================================================================

 Constants are one type of variable which we can define for any class with keyword const.
Value of these variables cannot be changed any how after assigning.
Class constants are different than normal variables, as we do not need $ to declare the class constants.
If we are inside the class then values of the constants can be get using self keyword, 
but accessing the value outside the class you have to use Scope Resolution Operator.

======================================================================================*/

// define('ok',123);
// echo ok;

class ConstClass
{
    const city = "Saidpur";
    function sayHello()
    {
        echo "hi from " . self::city;  //$this::city o likha jabe coz etar object create hoise tai
    }
}
$obj = new ConstClass();
$obj->sayHello();
echo PHP_EOL;
echo $obj::city;   //obj and scope resolution use kore city k access kortesi
echo PHP_EOL;
echo ConstClass::city; //class and scope resolution use kore city k access kortesi
