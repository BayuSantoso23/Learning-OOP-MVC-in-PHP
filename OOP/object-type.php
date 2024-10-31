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

class displayProductInfo{
    // Specified Display Input
    public function display(construct_product $product){
        $str = "{$product->title} | {$product->getLabel()} (Rp. {$product->price})";
        return $str;
    } 
}

// Object Instantiation 1
$product1 = new construct_product("RX 6700XT", "Radeon", "VGA", "Rp. XX.XXX.XXX");
$product2 = new construct_product("Asus TUF", "Asus", "Laptop", "Rp. XX.XXX.XXX");

$displayProduct1 = new displayProductInfo();
echo $displayProduct1->display($product1);

echo "<br>";

$displayProduct2 = new displayProductInfo();
echo $displayProduct2->display($product2);





