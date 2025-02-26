<?php 
class Database
{
    private static $instance = null;
    private function __construct()
    {
        echo "Connected to database";
    }
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
    }
}

$db1 = Database::getInstance();
echo "<br>";
$db2 = Database::getInstance();