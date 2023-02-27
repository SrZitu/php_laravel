<?php
abstract class Shape
{

    function sayHi()
    {
        echo "hi";
    }
    abstract function calculateArea(); //this method must be implement in child just like the same way
}
class Rectangle extends Shape
{

    function sayHi()
    {
        echo "hello from child ";
        parent::sayHi();
    }
    function calculateArea()
    {
        echo  "hello abstruct class test";
    }
}
$rec = new Rectangle(12, 12);
$rec->calculateArea();
