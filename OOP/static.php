<?php

/*===========================================================================
Static methods can be called directly - without creating an instance of the class first.
Static methods are declared with the static keyword: 
============================================================================*/

// static methods
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


class vehicle{
    protected static function getVeiacleType(){
        return "Car";
    }
}


class Cars extends vehicle{
    public $veiacle_type;

    public function __construct()
    {
        $this->veiacle_type = parent::getVeiacleType();
    }
}

$myCar = new Cars;
print_r($myCar);

echo "<br>";

echo $myCar->veiacle_type;



// static properties
class pi {
    public static $value=3.14159;
    public function staticValue() {
      return self::$value;
    }
  }
  
  $pi = new pi();
  echo $pi->staticValue();
