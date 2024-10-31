<?php

class construct_product{
    // Variable Decleration (Property)
    public $title,
           $brands,
           $category;

    // Can be Acessed by Parent and Child Class
    protected $discount = 0;

    // Can only be Acessed by Parent Class
    private $price;

    public function __construct($title = "Asus Vivobook", $brands = "Asus", 
                                $category = "Laptop", $price = 100) {
        $this->title = $title;
        $this->brands = $brands;
        $this->category = $category;
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price - ($this->price * $this->discount/100);
    }

    // Method (Function in class)
    public function getLabel(){
        return "$this->title, $this->category, $this->brands";
    }

    public function getProductInfo(){
        $str = "{$this->title}, ($this->brands) | (Rp. {$this->price}) ";
        return $str;
    }

}

class Laptop extends construct_product{
    public $releaseDate;

    public function __construct($title = "Asus Vivobook", $brands = "Asus", 
                                $category = "Laptop", $price = 100, $releaseDate = 2000){
        
        parent::__construct($title, $brands, $category, $price);

        $this->releaseDate = $releaseDate;

    }
    public function getProductInfo()
    {
        $str = "{$this->category} : ". parent::getProductInfo() ." - Resleased in ({$this->releaseDate}) ";
        return $str;
    }
}

class Processor extends construct_product{
    public $totalCores;

    public function __construct($title = "Asus Vivobook", $brands = "Asus", 
                                $category = "Laptop", $price = 100, $totalCores = 4){

        parent::__construct($title, $brands, $category, $price);
                            
        $this->totalCores = $totalCores;
    }

    // Protected Discount in Child Class
    public function setDiscount($discount){
        $this->discount = $discount;
    }

    public function getProductInfo()
    {
        $str = "{$this->category} : ". parent::getProductInfo() ." - Core : {$this->totalCores} ";
        return $str;
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
$product1 = new Processor("Intel 12500H", "Intel", "Processor", 100, 12);

$product2 = new Laptop("Asus TUF", "Asus", "Laptop", 200, 2020);

echo $product1->getProductInfo();
echo "<br>";
echo $product2->getProductInfo();

echo "<hr>";

echo $product1->setDiscount(50);
echo "<br>";
echo $product1->getPrice();



