<?php

/*=================================================================================

Constructor is suitable for any initialization that the object may need before it is used.
We can design constructor using "__construct" or same name as class name.
Parent constructors are not called implicitly if the child class defines a constructor.
 In order to run a parent constructor, a call to parent::__construct().

===================================================================================*/
class Student
{
    public $name;
    public $id;
    function __construct($studentName, $id = 0) //kokhno parameter pass korte na chaile avabe default parameter set kori
    {
        $this->name = $studentName;
        $this->id = $id;
    }

    public function getId()
    {
        if ($this->id) {
            echo "Id is:" . $this->id . "\n";
            $this->getName();
        } else {
            echo "i don't know the id \n";
            $this->getName();
        }
    }
    public function getName()
    {
        echo "Name is:" . $this->name;
    }
}

$student1 = new Student("Sazzadur", "133014");
$student2 = new Student("Sahriar", "213175");
$student3 = new Student('sakibur');
$student1->getId();
echo PHP_EOL;
$student2->getId();
echo PHP_EOL;
$student3->getId();
