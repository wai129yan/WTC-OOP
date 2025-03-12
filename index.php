<?php

use App\Bird\Bird;
use App\Cat\Cat;
use App\Dog\Dog;
use App\Fish\Fish;


include "./vendor/autoload.php";

class Index
{
    public function __construct()
    {
        new Bird;
        new Cat;
        new Dog;
        new Fish;
    }
}

new Index;
