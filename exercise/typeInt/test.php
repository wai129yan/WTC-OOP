
<?php

class Product {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

function printProductNames(array $products): void {
    foreach ($products as $product) {
        echo $product->name . "\n";
    }
}

$products = [new Product("Product1"), new Product("Product2"),new Product("Product3")];
printProductNames($products);  // Output: Product1, Product2
