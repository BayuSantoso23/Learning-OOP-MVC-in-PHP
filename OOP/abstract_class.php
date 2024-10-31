<?php

abstract class construct_product{
    // Variable Decleration (Property)
    public $title,
           $brands,
           $category,
           $price,
           $discount = 0;

    public function __construct($title = "Asus Vivobook", $brands = "Asus", 
                                $category = "Laptop", $price = 100) {
        $this->title = $title;
        $this->brands = $brands;
        $this->category = $category;
        $this->price = $price;
    }

    // Setter & Getter Title
    public function setTitle($title){
        if(!is_string($title)){
            throw new Exception("Judul must be string");
        }
        $this->title = $title;
    }
    
    public function getTitle(){
        return $this->title;
    }

    // Setter & Getter Brands
    public function setBrands($brands){
        if(!is_string($brands)){
            throw new Exception("Brands must be string");
        }
        $this->brands = $brands;
    }

    public function getBrands(){
        return $this->brands;
    }

    // Setter & Getter Category
    public function setCategory($category){
        if(!is_string($category)){
            throw new Exception("Category must be string");
        }
        $this->category = $category;
    }

    public function getCategory(){
        return $this->category;
    }

    // Setter & Getter Discount
    public function setDiscount($discount){
        $this->discount = $discount;
    }

    public function getDiscount(){
        return $this->discount;
    }


    // Setter & Getter Price
    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price - ($this->price * $this->discount/100);
    }

    // Method (Function in class)
    public function getLabel(){
        return "$this->title, $this->category, $this->brands";
    }

    abstract public function getProductInfo();
    
    public function getInfo(){
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
        $str = "{$this->category} : ". $this->getInfo() ." - Resleased in ({$this->releaseDate}) ";
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

    public function getProductInfo()
    {
        $str = "{$this->category} : ". $this->getInfo() ." - Core : {$this->totalCores} ";
        return $str;
    }
}

class displayProductInfo{

    // Array Declaration
    public $ProductList = array();

    public function addProduct(construct_product $product){
        $this->ProductList[] = $product;
    }
    // Specified Display Input
    public function displayProduct(){
        $str = "Product List : <br>";

        foreach( $this->ProductList as $product){
            $str .= "- {$product->getProductInfo()} <br>";
        }

        return $str;
    } 
    
}




// Object Instantiation 1
$product1 = new Processor("Intel 12500H", "Intel", "Processor", 100, 12);

$product2 = new Laptop("Asus TUF", "Asus", "Laptop", 200, 2020);

$PrintProduct = new displayProductInfo();
$PrintProduct->addProduct($product1);
$PrintProduct->addProduct($product2);
echo $PrintProduct->displayProduct();


