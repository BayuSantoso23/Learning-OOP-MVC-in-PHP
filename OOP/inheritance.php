<?php

class construct_product{
    // Variable Decleration (Property)
    public $title,
           $brands,
           $category,
           $price,
           $releaseDate,
           $totalCores;

    public function __construct($title = "Asus Vivobook", $brands = "Asus", 
                                $category = "Laptop", $price = "Rp. 12.000.XXX",
                                $releaseDate = 0, $totalCores = 0) {
        $this->title = $title;
        $this->brands = $brands;
        $this->category = $category;
        $this->price = $price;
        $this->releaseDate = $releaseDate;
        $this->totalCores = $totalCores;
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
    public function getLaptopInfo()
    {
        $str = "{$this->category} : {$this->getLabel()} - Resleased in ({$this->releaseDate}) ";
        return $str;
    }
}

class Processor extends construct_product{
    public function getProcessorInfo()
    {
        $str = "{$this->category} : {$this->getLabel()} - Core : {$this->totalCores} ";
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
$product1 = new Processor("Intel 12500H", "Intel", "Processor", "Rp. XX.XXX.XXX", 0, 12);

$product2 = new Laptop("Asus TUF", "Asus", "Laptop", "Rp. XX.XXX.XXX", 2020, null);

echo $product1->getProcessorInfo();
echo "<br>";
echo $product2->getLaptopInfo();





