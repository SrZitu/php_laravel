<?php
abstract class Shape
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    abstract public function getArea();
}
