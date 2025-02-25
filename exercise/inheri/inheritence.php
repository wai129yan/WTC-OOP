<?php

class Vehicle 
{
    public $price;
    public $color;
    public $brand;
    protected $model;
    protected $make;

    public function __construct($price, $color, $brand, $model, $make)
    {
        $this->price = $price;
        $this->color = $color;
        $this->brand = $brand;
        $this->model = $model;
        $this->make = $make;
    }
    
    public function start()
    {
        echo "Starting the vehicle";
    }

    public function stop()
    {
        echo "Stopping the vehicle";
    }

    // Getter methods to access protected properties
    public function getModel()
    {
        return $this->model;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function setMake($make)
    {
        $this->make = $make;
    }
   
}

class Car extends Vehicle
{
    public $type;
    private $fuelType;
    private $engineType;

    public function __construct($price, $color, $brand, $model, $make, $type, $fuelType, $engineType)
    {
        // Correctly pass all arguments to the parent constructor
        parent::__construct($price, $color, $brand, $model, $make);
        $this->type = $type;
        $this->fuelType = $fuelType;
        $this->engineType = $engineType;
    }

    public function start()
    {
        echo "Starting the car";
    }
    
    public function buyFuel()
    {
        echo "Bought the car's $this->fuelType fuel";
    }

    public function modelEngine()
    {
        echo "The car's model is " . $this->getModel() . " and engine type is $this->engineType";
    }
}

$car = new Car(1000, "red", "Toyota", "2020", "Toyota", "Sedan", "Petrol", "V8");
echo $car->price;
echo $car->color;
echo $car->brand;
echo $car->getModel();  // Access model via getter method
echo $car->getMake();  
echo "<br>";

$car->setMake('Honda');   // Access make via getter method
echo $car->getMake();
?>
