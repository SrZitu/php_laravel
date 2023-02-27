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
        return $this->name;
    }
    public function getEmail()
    {
       return $this->email;
    }
}
$person1=new Person();
$person1->setName("Sazzad");
$person1->setEmail("zitu094@gmail.com");
echo "Name: " . $person1->getName();
echo "<br/>";
echo "Email: " .$person1->getEmail();
