<?php
// Inheritance
class Computer
{
    public $price;
    public $color;
    public $brand;
    public $condition;
    public function __construct($price, $color, $brand, $condition)
    {
        $this->price = $price;
        $this->color = $color;
        $this->brand = $brand;
        $this->condition = $condition;
        // echo "Price: $this->price color is $this->color";
    }
}

class Sony extends Computer
{
    private $location = "Japan";
    public function getLocation()
    {
        return $this->location;
    }
    public function specialPrice()
    {
        return $this->price - 100;
    }
}
$sony = new Sony(900, "white", "sony", "Second");
echo $sony->price;
echo $sony->condition;
echo $sony->color;
echo $sony->brand;
echo $sony->getLocation();
echo $sony->specialPrice();

// class Dell extends Computer
// {
//     private $location = "USA";
//     public function getLocation()
//     {
//         return $this->location;
//     }
//     public function specialPrice()
//     {
//         return $this->price - 100;
//     }
// }
// echo "<br>";

// $dell = new Dell(1200, "white", "Dell", "New");
// echo $dell->price;
// echo $dell->condition;
// echo $dell->getLocation();
// echo $dell->specialPrice();

// class Apple extends Computer
// {
//     private $location = "USA";
//     public function getLocation()
//     {
//         return $this->location;
//     }
//     public function specialPrice()
//     {
//         return $this->price - 100;
//     }
// }
// echo "<br>";
// $apple = new Apple(1000, "white", "Apple", "Second");
// echo $apple->price;
// echo $apple->condition;
// echo $apple->getLocation();
// echo $apple->specialPrice();











Message zin oo









Shift + Enter to add a new line