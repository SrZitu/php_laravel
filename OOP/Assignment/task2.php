<?php

//Task 2
class Person
{
    public $name;
    public $email;
   
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getName()
    {
        echo "Name :" . $this->name;
    }
    public function getEmail()
    {
        echo "Email :" . $this->email;
    }
}
$person1=new Person();
$person1->setName("Sazzad");
$person1->setEmail("zitu094@gmail.com");
$person1->getName();
echo "<br/>";
$person1->getEmail();
