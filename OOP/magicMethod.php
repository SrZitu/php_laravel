<?php
class Student
{
    protected $id;
    protected $name;
    protected $class;
    public function __construct($id=' ', $name=' ',$class= '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->class=$class;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop,$value)
    {
        $this->$prop=$value;
    }
}
$student1=new Student();
echo $student1->name="sazzad";
echo $student1->id=11;
