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

    public function getProductInfo(){
        $str = "{$this->title}, ($this->brands) | (Rp. {$this->price}) ";
        return $str;
    }

}

class Laptop extends construct_product{
    public $releaseDate;

    public function __construct($title = "Asus Vivobook", $brands = "Asus", 
                                $category = "Laptop", $price = "Rp. 12.000.XXX", 
                                $releaseDate = 0){
        
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
                                $category = "Laptop", $price = "Rp. 12.000.XXX",
                                $totalCores = 0){

        parent::__construct($title, $brands, $category, $price);
                            
        $this->totalCores = $totalCores;
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
$product1 = new Processor("Intel 12500H", "Intel", "Processor", "Rp. XX.XXX.XXX", 12);

$product2 = new Laptop("Asus TUF", "Asus", "Laptop", "Rp. XX.XXX.XXX", 2020);

echo $product1->getProductInfo();
echo "<br>";
echo $product2->getProductInfo();





