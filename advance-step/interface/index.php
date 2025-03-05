<?php

// include "./foodInterface.php";
// include "./gradeInterface.php";

include "./autoload.php";


class Eat implements foodInterface,gradeInterface
{
    public function eating()
    {
        return "eating";
    }
    public function drinking()
    {
        return "drinking";
    }

    public function getLevel($value)
    {
        return "<br>I am level $value";
    }
}

$u = new Eat();
// $u->hello();

echo $u->getLevel(66);