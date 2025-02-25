<?php

class Employee {
    protected $name;
    protected $salary; // 5000

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    // public function getName() {
    //     return $this->name;
    // }
    // public function getPosition() {
    //     return $this->position;
    // }

    public function calculateSalary() {
        return $this-> salary;
    }
}

class fullStaff extends Employee
{
    public function calculateSalary()
    {
        return $this-> salary ; //fixed salary
    }
}

class partStaff extends Employee
{
    public function calculateSalary()
    {
        return $this->salary * 24; //calculate by working hours
    }
}


class contractStaff extends Employee
{
    public function calculateSalary()
    {
        //$this->salary = $salary;
        return $this-> salary * 8; //calculate by working hours
    }
}


$fullStaff = new fullStaff("John", 83000);
echo "Full Staff is ". $fullStaff->calculateSalary() . " !!!";
echo "<br>";

$partStaff = new partStaff("Jane", 1500);
echo"Part Time Staff is ". $partStaff->calculateSalary() ." !!!";

$contractStaff = new contractStaff("MgMG", 2000);
echo "<br>";
echo "Contract Staff is ". $contractStaff->calculateSalary() ." !!!";