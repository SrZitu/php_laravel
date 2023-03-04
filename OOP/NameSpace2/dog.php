<?php
namespace  OOP\NameSpace2;

class Dog {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function bark() {
        echo "Woof, woof! My name is " . $this->name . "!\n";
    }
}
