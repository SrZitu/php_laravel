<?php
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
