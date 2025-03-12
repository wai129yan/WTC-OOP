<?php

include "./tra/Timestamp.php";
include "./tra/Logger.php";

class Index
{
    use Timestamp, Logger;

    public function testing()
    {
        echo "Testing";
    }
   
}


$tet = new Index;

$tet->testing();
echo "<br>";

$tet->log("Hello Trait");
echo "<br>";

echo $tet->getCreatedAt();
echo "<br>";