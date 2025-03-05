<?php 

include "Car.php";
include "Ship.php";
include "Aeroplane.php";

class Index extends Car 
{
    use Ship,Aeroplane;
}

$t = new Index;

$t->drive();
echo "<br>";

$t->sail();
echo "<br>";

$t->fly();