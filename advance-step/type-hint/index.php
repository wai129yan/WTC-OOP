<?php

include "./Person.php";

class Book 
{
    private $name;
    private $price;

    public function author (array $name)
    {
        foreach ($name as $key => $n)
        {
            $key = ++$key;
            echo "$key author name is $n <br>";
        }
    }

    public function getName(Person $person)
    {
        return $this->name = $person->names();
    }

    public function getPrice(int $price)
    {
        return $this -> price = $price;
    }
    
}

$book1 = new Book;

echo $book1->getPrice(300);

echo "<br>";

$book1->author(["bobo","rose","nono"]);
echo "<br>";

echo "<pre>";
$arr = $book1->getName(new Person);
print_r($arr);