<?php 

class Person 
{
    public $name = "John";
    protected $age = 20;
    private $address = "Yangon";

    public function getAddress()
    {
        return $this->address;  // Correctly accessing private property within the class
    }

    // Getter for age if needed
    public function getAge()
    {
        return $this->age;  // Access protected property within the class
    }
}

$person = new Person();
$person->name = "Jane";  // Changing name property
echo $person->name;      // Display updated name
echo "<br>";
echo $person->getAddress();
echo "<br>";  // Access address through the getter method

class Person1 extends Person
{
    public function getAgeFromParent()
    {
        return $this->getAge();  // Accessing protected property via getter method in the parent class
    }
}

$person2 = new Person1();
echo "<br>";
echo $person2->getAgeFromParent();  // Calling the method from the subclass to get age

?>
