
<?php

class Myclass
{

    public $age;
    public $name;

    // public function setName($name)
    // {
    //     $this->name = $name;
    // }
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setName($name)
    {

        $this->name = $name;
    }
    public function getAge()
    {
        echo "age is :" . $this->age;
    }
    public function getName()
    {
        echo "\nName is :" . $this->name . "\n";
    }
}

$obj1 = new Myclass();
$obj1->setAge(10);
$obj1->setName("sakibur");
$obj1->getName();
$obj1->getAge();

$obj2 = new Myclass();
//$obj2->name = "sazzad";
$obj2->setName("sazzadur");
$obj2->setAge(23);
$obj2->getName();
$obj2->getAge();

//another way to passing values to class properties and method
$obj3 = new Myclass();
//$obj2->name = "sazzad";
$obj3->name = "sadman";
$obj3->age = 2;
$obj3->getName();
$obj3->getAge();
