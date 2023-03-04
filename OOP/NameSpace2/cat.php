<?php
namespace  OOP\NameSpace2;

class Cat {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function meow() {
        echo "Meow, meow! My name is " . $this->name . "!\n";
    }
}
