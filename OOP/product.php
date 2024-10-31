<?php

class product{
    // Variable Decleration (Property)
    public $title = "Asus Vivobook",
           $brands = "Asus",
           $category = "Laptop",
           $price = "Rp. 12.000.XXX";

    // Method (Function in class)
    public function getLabel(): string{
        return "$this->title, $this->category, $this->brands";
    }

}

// Object Instantiation 1
$product1 = new product();
$product1->title = "Acer Nitro 5";
var_dump($product1);

// Object Instantiation 2 + Making Addition 
$product2 = new product();
$product2->title = "Lenovo Ideapad";
$product2->brands = "Lenovo";

// Count as Making New Variable 
// $product2->user = "user1";
var_dump($product2);

$product3 = new product();
$product3->title = "ROG Zephyrus";
$product3->brands = "ROG";
$product3->category = "Laptop";
$product3->price = "Rp. XXX.XXX.XXX";

$product3 = new product();
$product3->title = "ROG Zephyrus";
$product3->brands = "ROG";
$product3->category = "Laptop";
$product3->price = "Rp. XXX.XXX.XXX";

$product4 = new product();
$product4->title = "RTX 4070";
$product4->brands = "Nvidia";
$product4->category = "VGA";
$product4->price = "Rp. XXX.XXX.XXX";

echo "Product 1: " . $product3->getLabel();
echo "<br>";
echo "Product 2: " . $product4->getLabel();


