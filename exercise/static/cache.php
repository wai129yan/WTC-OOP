<?php
class Cache {
    private static $data = [];

    public static function get ($key)
    {
        return self::$data[$key] ?? null;
    }

    public static function set ($key,$value) 
    {
        self::$data[$key] = $value; // not clear why we use self::$data[$key] = $value
    }
}

// Cache::set('user_1', 'John Doe');
// echo Cache::get('user_1'); // Output: John Doe

echo "<br>";

// Cache::set('user_2', 'Mr Doe');
// echo Cache::get('user_2');

echo "<br>";

Cache::set('user_3', ' ');
echo Cache::get('user_3');