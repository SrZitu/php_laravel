<?php
class Shape
{
    protected $name;
    protected $area;

    public function __construct($name)
    {
        $this->name = $name;
        $this->calculateArea();
    }
    public function getArea()
    {
        echo "This {$this->name}'s area is {$this->area}";
    }
    public function calculateArea()
    {
    }
}
class Rectangle extends Shape
{
    private $length, $breadth;
    public function __construct($length, $breadth)
    {
        $this->length = $length;
        $this->breadth = $breadth;
        parent::__construct("Rectangle");
    }
    public function calculateArea()
    {
        return   $this->area = $this->length * $this->breadth;
    }
}
class Triangle extends Shape
{
    private $base, $height;
    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
        parent::__construct("Triangle");
    }
    public function calculateArea()
    {
        return   $this->area = ($this->base * $this->height) / 2;
    }
}
$rec = new Rectangle(6, 4);
echo $rec->getArea();
echo PHP_EOL;
$tri = new Triangle(6, 4);
echo $tri->getArea();
