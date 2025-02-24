<?php

class Animal
{
    public $name;
    public $age;
    public $color;

    public function __destruct()
    {
        echo "<br> final destruct";
        echo $this->name;
    }


    //
    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }


    // behavior
    public function canCall()
    {
        return $this->name . " can call";
    }
    public function canCount()
    {
        return $this->age . " can count";
    }
    public function canColor()
    {
        return $this->color . " can color";
    }

    // getter
    public function getColor()
    {
        return $this->color;
    }
    // setter
    public function setColor($color)
    {
        return $this->color = $color;
    }
}

// $animal = new Animal();
$cat = new Animal("nyoma", 10, "white");
// $animal->name = "Dog";
// $animal->age = 10;
// $animal->color = "white";



echo $cat->getColor();
echo "<br>";
echo $cat->setColor("black");
echo "<br>";
echo $cat->canCall();
echo "<br>";
echo $cat->canCount();


echo $animal->canCall();
echo "<br>";
echo $animal->canCount();
echo "<br>";
echo $animal->canColor();
echo "<br>";

print_r($animal);
// echo $animal;  // object

$dog = new Animal("bobo", 10, "white");

echo $dog->canCall();
echo "<br>";
echo $dog->canCount();
echo "<br>";
echo $dog->canColor();
echo "<br>";
echo $dog->getColor();
echo "<br>";
echo $dog->setColor("black");
