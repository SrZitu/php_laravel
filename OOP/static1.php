<?php
class A
{
    protected static $name;
    static function sayHello()
    {
        self::$name = "hello\n";
        echo "hi from A\n";
    }
}
class B extends A
{
    static function sayHello()
    {
        parent::sayHello();
        echo parent::$name; // parent er property access kortese :: use kore
        echo "Hello from B\n";
    }
}
B::sayHello();
//echo B::$name; //protected method dekhe bahire theke acces passina