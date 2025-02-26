<?php 

class Shipping 
{
    protected $weight; //purpose is to use for child 
    protected $shippingCost = 3000; // 5000  //private

    public function __construct($weight)
    {
        $this->weight = $weight;
    }
    
    public function calculateShippingCost()
    {
        return $this-> weight * 2; // does not use get
    }

    public function getShippingCost()
    {
       return $this->shippingCost;
    }
}

$s1 = new Shipping(10);
echo $s1->getShippingCost();


class StandardShipping extends Shipping
{
    public function calculateShippingCost()
    {
        // return $this->weight * 2;
        return $this-> shippingCost * 2;
    }

    public function getShippingTime()
    {
        return "3-5 days";
    }

    public function getShippingCost()
    {
       return $this->shippingCost;
    }
}

class ExpressShipping extends Shipping {
    public function calculateShippingCost() {
        // return $this->weight * 3.5; 
        return $this-> shippingCost * 4;
    }
}

// $standard = new StandardShipping(110);
// echo "Standard Shipping Cost: " . $standard->calculateShippingCost() . "<br>";
// echo "Express Shipping Time: " . $standard->getShippingTime() . "<br>";
// echo  "Shipping Cost is " .$standard->getShippingCost();
// echo "<br>";    

// $express = new ExpressShipping(40);
// echo "Express Shipping Cost: " . $express->calculateShippingCost() . "<br>";
