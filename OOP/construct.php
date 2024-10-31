<?php

class construct_product{
    // Variable Decleration (Property)
    public $title,
           $brands,
           $category,
           $price;

    public function __construct($title = "Asus Vivobook", $brands = "Asus", 
                                $category = "Laptop", $price = "Rp. 12.000.XXX") {
        $this->title = $title;
        $this->brands = $brands;
        $this->category = $category;
        $this->price = $price;
    }

    // Method (Function in class)
    public function getLabel(){
        return "$this->title, $this->category, $this->brands";
    }

}

// Object Instantiation 1
$product1 = new construct_product("RX 6700XT", "Radeon", "VGA", "Rp. XX.XXX.XXX");
$product2 = new construct_product("Asus TUF", "Asus", "Laptop", "Rp. XX.XXX.XXX");

echo "Nama :" . $product1->getLabel();
echo "<br>";
echo "Nama :" . $product2->getLabel();




