<?php 

class User 
{
    const GENDER = "female";
    const PI = 3.14;
    
    public static $name = "rose";
    static public $number = 0;

    static public function increment()
    {
        return self::$number++;
    }

    static public function decrement()
    {
        return self::$number --;
    }
    static public function reset()
    {
        return self::$number = 0;
    }

    static public function getName()
    {
        return self::$name;
    }

    static public function getGender()
    {
        return self::GENDER; //const
    }

    static public function login($email,$password)
    {
        if($email && $password){
            return true;
        }
        return false;
    }

    static public function route ($path,$cb)
    {
        $cb();
    }

}

User::route("/project",function (){
    echo  "project";
});

User::route("/about", function () {
    echo  "about";
});

User::increment();
User::increment();
User::increment();
User::increment();
User::increment();

echo User::$number;
echo "<br>";
User::increment();
echo "<br>";

echo User::$number;
echo "<br>";
echo User::GENDER;
echo "<br>";
echo User::$name;
echo "<br>";
echo User::getName();
