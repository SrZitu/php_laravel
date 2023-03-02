<?php
class PropertyOverload
{

    protected $name;
  private $model = array();

    public function __set($name, $value)
    {
        echo "Setting {$name} to {$value}\n";
        $this->model[$name] = $value;
    }

    public function __get($name)
    {
        echo "getting {$name} \n";
        if (array_key_exists($name, $this->model))
            return $this->model[$name];
            
    }

    public function __isset($name)
    {
        echo "\nchecking if {$name} is set or not\n";
        return isset($this->model[$name]);
    }
    public function __unset($name)
    {
        echo "\nUnsetting the {$name}\n";
        unset($this->model[$name]);
    }
}

$obj1 = new PropertyOverload();
$obj1->pulsar = "140cc";
$obj1->pulsar = "150cc";
$obj1->pulsar = "160cc";
var_dump($obj1->pulsar);
var_dump(isset($obj1->pulsar));
unset($obj1->pulsar);
var_dump(isset($obj1->pulsar));

//method overloading
class GFG {
	
	//kono method nai but setake call korle ata k call korbe
    //error 404 not found meassage avabe pathay
	public function __call($name, $arguments) {
		
		echo "Calling object method '$name' "
			. implode(', ', $arguments). "\n";
	}

	
	public static function __callStatic($name, $arguments) {
		
		echo "Calling static method '$name' "
			. implode(', ', $arguments). "\n";
	}
}

// Create new object
$obj = new GFG;

$obj->runTest('in object context');

GFG::StaticTest('in static context');

?>
