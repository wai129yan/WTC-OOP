<?php 

class Product 
{
    private static $products = [
        ['name' => 'Product 1' , 'price' => 100],
        ['name' => 'Product 2' ,'price' => 200],
        ['name' => 'Product 3' , 'price' => 300],
    ];

    public static function getProducts()
    {
        return self::$products;
    }

    public static function getProduct($index)
    {
        return self::$products[$index];
    }

    public static function addProduct($name,$price)
    {
        self::$products[] = ['name' => $name,'price' => $price];
    }

    public static function editProduct($index,$name,$price)
    {
        self::$products[$index] = ['name'=>$name,'price' => $price];
    }

    public static function removeProduct($index)
    {
        unset (self::$products[$index]);
    }
}

echo "<pre>";
$allProducts = Product::getProducts();
// print_r($allProducts);
echo "<pre>";

$singleProduct = Product::getProduct(0);
// $print_r($singleProduct);
echo "<pre>";

Product::addProduct('Product4',400);
echo "<br>";

Product::addProduct('Product5',800);
echo "<br>";

Product::editProduct(4,'Product 5 edited',900);

echo "<br>";

Product::removeProduct(4);
echo "<br>";
echo "<pre>";

$allProducts = Product::getProducts();
print_r($allProducts);
