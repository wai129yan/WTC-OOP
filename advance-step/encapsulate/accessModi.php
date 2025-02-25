<?php 

class Person 
{
    public $name = "John";
    protected $age = 20;
    private $address = "Yangon";

    public function getAddress()
    {
        return $this -> address;
    }
}

$person = new Person ();

$person -> name = "Jane"; 
echo "<br>";
$person -> getAddress();

class Person1 extends Person
{
    public function getAge()
    {
        return $this ->age;
    }
}

$person2 = new Person1();
echo $person2->getAge();