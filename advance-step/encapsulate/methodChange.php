<?php
class Bill
{
    public $dinner = 20;
    public $lunch = 30;
    public $desserts = 10;
    public $coldDrink = 10;
    public $bill;

    public function dinner($person)
    {
        $this->bill += $this->dinner * $person;
        //print_r($this);
        return $this;
    }

    public function lunch($person)
    {
        $this->bill += $this->lunch * $person;
        return $this;
    }

    public function dessert($person)
    {
        $this->bill += $this->desserts * $person;
        return $this;
    }

    public function drink($person)
    {
        $this->bill += $this->coldDrink * $person;
        return $this;
    }
}


$table1 = new Bill();
$table2 = new Bill();

echo $table1->drink(3)->dinner(4)->bill;
echo "<br>";

echo  $table2-> dinner(3)->drink(5)->bill;
echo "<br>";

echo  "table2=> ", $table2 -> dinner(4) -> drink(2) ->lunch(2)->bill;