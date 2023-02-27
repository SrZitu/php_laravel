<?php
interface A1
{
    function tringle();
}
interface B1
{
    function  sayHi();
}

class Hybrid implements A1, B1
{
    function tringle()
    {
        echo "tringle\n";
    }
    function sayHi()
    {
        echo "hello";
    }
}

$obj1 = new Hybrid();
$obj1->tringle();
echo $obj1 instanceof A1;
