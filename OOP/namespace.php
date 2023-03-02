<?php
/* ============================================================================
In PHP, a namespace is a way to encapsulate classes, functions, constants, 
and other names to avoid naming conflicts. 
Namespaces allow developers to group related code together and
 avoid naming collisions when using code from different sources.
============================================================================*/

namespace MyNamespace;

class MyClass
{
    public function hello()
    {
        echo 'Hello from MyClass!';
    }
}

function myFunction()
{
    echo 'Hello from myFunction!';
}


// use function MyNamespace\myFunction;
// use MyNamespace\MyClass;

$obj = new MyClass();
$obj->hello(); // Output: Hello from MyClass!

myFunction(); // Output: Hello from myFunction!