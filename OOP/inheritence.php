<?php

/* ============================================================================
Inheritance in OOP = When a class derives from another class.
The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
An inherited class is defined by using the extends keyword.
============================================================================*/
class Father
{
    protected $name;
    public function __construct($name)

    {
        $this->name = $name;
        $this->sayHi(); //mane child class k call kortesi


    }
    function sayHi()
    {
        echo "say hi from Parent {$this->name}\n";
    }
}

class Child extends Father
{
    function sayHi()
    {
        parent::sayHi(); //parent class er method run kortese
        echo "Hello";
    }
}
$obj1 = new Child("Sazzad");


