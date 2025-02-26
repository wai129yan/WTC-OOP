<?php 

class Visitor {
    private static $count = 0;

    public function __construct()
    {
        self::$count++; // why does increase the count
    }
    public static function getCount()
    {
        return self::$count;
    }
}
$visitor1 = new Visitor();
//echo $visitor1->getCount();

$visitor2 = new Visitor();
//echo $visitor2->getCount();

$visitor3 = new Visitor();
//echo $visitor3->getCount();

echo "Total visitors: " . Visitor::getCount();
?>
