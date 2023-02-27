
<?php
/*===============================================================================================
The __clone() is a magic method with the following syntax:
function __clone ( ) : void
If you define the clone() method, PHP will execute it automatically when the cloning completes. 
The clone() is useful when you want to change the properties of the copied object.
===============================================================================================*/


class Address
{
    public $street;

    public $city;
}

class Person1
{
    public $name;

    public $address;

    public function __construct($name)
    {
        $this->name = $name;
        $this->address = new Address();
    }


    // public function __clone()
    // {
    // 	$this->address = clone $this->address;  //this implents deep copy.
    //  tarmane aktar karone r akta change hssena
    // }
}

$bob = new Person1('Bob');
$bob->address->street = 'North 1st Street';
$bob->address->city = 'San Jose';

print_r($bob);

$alex = clone $bob;
$alex->name = 'Alex';

print_r($alex);

$alex->address->street = '1 Apple Park Way';
$alex->address->city = 'Cupertino';

print_r($bob); //shallow copy,alex change korte bob o change hoye gese