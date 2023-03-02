<?php

/*===================================================================================
PHP only supports single inheritance: a child class can inherit only from one single parent.
So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
Traits are used to declare methods that can be used in multiple classes. 
Traits can have methods and abstract methods that can be used in multiple classes,
 and the methods can have any access modifier (public, private, or protected).

 A trait is similar to a class, but it is only for grouping methods in a fine-grained and 
 consistent way. 
 PHP does not allow you to create an instance of a Trait like an instance of a class. 
 And there is no such concept of an instance of a trait

 trait TraitName {
======================================================================================
}
*/


trait madeInChina
{
    public function showMessage()
    {
        echo "This car comes from china factory";
    }
}

trait madeInUSA
{
    public function showInfo()
    {
        echo "This car comes from usa factory";
    }
}

trait madeInUAE
{
    public function declearInfo()
    {
        echo "This car comes from uae factory";
    }
}


class Car
{
    use madeInChina, madeInUSA, madeInUAE;
    public $model;

    public function __construct($brand)
    {
        $this->model = $brand;
    }
}




$myCar = new Car("Toyota");
print_r($myCar);
echo PHP_EOL;

$myCar->showMessage();
echo PHP_EOL;
$myCar->showInfo();
echo PHP_EOL;
$myCar->declearInfo();

echo PHP_EOL;


//example 2
trait Preprocessor
{
    public function preprocess()
    {
        echo 'Preprocess...done' . "\n";
    }
}
trait Compiler
{
    public function compile()
    {
        echo 'Compile code... done' . "\n";
    }
}

trait Assembler
{
    public function createObjCode()
    {
        echo 'Create the object code files... done.' . "\n";
    }
}

trait Linker
{
    public function createExec()
    {
        echo 'Create the executable file...done' . "\n";
    }
}

class IDE
{
    use Preprocessor, Compiler, Assembler, Linker;

    public function run()
    {
        $this->preprocess();
        $this->compile();
        $this->createObjCode();
        $this->createExec();

        echo 'Execute the file...done' . "\n";
    }
}

$ide = new IDE();
$ide->run();
