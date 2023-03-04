<?php

/*==================================================================================

PHP namespaces are like special containers that you can put your functions 
and classes in so that they don't get mixed up with other functions
and classes that have similar names. 
It's like putting your toys in different boxes so that you can find the one you want more easily!
===============================================================================*/
//using autoload and namespace together


function nameload($className)
{
    include strtolower("{$className}.php");
}
spl_autoload_register("nameload");

// Use the classes from the Dogs namespace
use OOP\NameSpace2\Dog;

$my_dog = new Dog("Rufus");
$my_dog->bark(); // prints "Woof, woof! My name is Rufus!"

// Use the classes from the Cats namespace
use  OOP\NameSpace2\Cat;

$my_cat = new Cat("Mittens");
$my_cat->meow(); // prints "Meow, meow! My name is Mittens!"