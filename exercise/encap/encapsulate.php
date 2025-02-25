<?php


class Car 
{
    public $brand;
    public $engine;
    public $color;

    public function __construct($brand,$engine,$color)
    {
        $this -> brand = $brand;
        $this -> engine = $engine;
        $this -> color = $color;
    }

    public function modelFunCar() 
    {
        return $this-> brand . " can drive " ;
    }

    public function electricEngineCar()
    {
        return $this-> engine . " engine low cost than other car";
    }

    public function beautyColorCar()
    {
        return $this-> color . " nice color car";
    }
    
    
}

$latest = new Car("Tesla", "electric turbo","gray");

echo "<pre>";
print_r ($latest);

echo "<br>";

echo $latest->modelFunCar();
echo "<br>";
echo $latest->electricEngineCar();
echo "<br>";
echo  $latest->beautyColorCar();

echo "<hr>";

$honda = new Car("honda-fit","Old Engine","lazy color");

print_r($honda);