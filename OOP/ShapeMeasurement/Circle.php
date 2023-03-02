<?php
require_once "Shape.php";
class Circle extends Shape
{
    public $redius;
    public $name;
    public function __construct($name, $redius)
    {
        parent::__construct($name);
        $this->redius = $redius;
    }
    public function getArea()
    {
        return pi() * $this->redius * $this->redius;
    }
}
