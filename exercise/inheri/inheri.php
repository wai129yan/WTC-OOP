<?php 

class Employee 
{
    protected $name;
    protected $position;
    protected $salary;
    protected $workingHours;

    public function __construct($name, $position, $salary, $workingHours)
    {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
        $this->workingHours = $workingHours;
    }
   
    public function getName()
    {
        return $this->name;
    }
    public function getPosition()
    {
        return $this->position;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function getWorkingHours()
    {
        return $this->workingHours;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPosition($position)
    {
        $this->position = $position;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function setWorkingHours($workingHours)
    {
        $this->workingHours = $workingHours;
    }

    public function displayInfo()
    {
        return "Name: $this->name, Position: $this->position, Salary: $this->salary, Working Hours: $this->workingHours";
    }

    public function totalSalary()
    {
        return $this->salary * $this->workingHours;
    }

    public function work()
    {
        return "Name: $this->name . is working at. $this->position . position";
    }
}

class Person extends Employee
{
    private $age;
    private $address;
    private $phone;

    public function __construct($name,$position,$salary,$workingHours,$age,$address,$phone)
    {
        parent::__construct($name,$position,$salary,$workingHours);
        $this->age = $age;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function information()
    {
        return "$this->name . is live in . $this->address . and his phone number is .$this->phone"; 
    }

    public function displayInfo()
    {
        return "Name: $this->name, Age: $this->age, Position: $this->position, Salary: $this->salary, Working Hours: $this->workingHours";
    }

}

$person1 = new Person("John Doe","Manager",50000,8,30,"New York","1234567890");

echo $person1->information();
echo "<br>";
echo $person1->displayInfo();
echo "<br>";
echo $person1->work();
echo "<br>";
echo $person1->totalSalary();