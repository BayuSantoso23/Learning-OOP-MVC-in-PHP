<?php

class construct_product{
    // Variable Decleration (Property)
    public $title,
           $brands,
           $category,
           $price,
           $releaseDate,
           $totalCores,
           $mainFunctionality;

    public function __construct($title = "Asus Vivobook", $brands = "Asus", 
                                $category = "Laptop", $price = "Rp. 12.000.XXX",
                                $releaseDate = 0, $totalCores = 0, $mainFunctionality) {
        $this->title = $title;
        $this->brands = $brands;
        $this->category = $category;
        $this->price = $price;
        $this->releaseDate = $releaseDate;
        $this->totalCores = $totalCores;
        $this->mainFunctionality = $mainFunctionality;
    }

    // Method (Function in class)
    public function getLabel(){
        return "$this->title, $this->category, $this->brands";
    }

    public function getAllInfo(){
        $str = "{$this->category} : {$this->title}, ($this->brands) (Rp. {$this->price}) ";
        if($this->mainFunctionality == "CPU"){
            $str .= "- {$this->totalCores} Cores";
        }else if($this->mainFunctionality =="Gaming"){
            $str .= "- Released in {$this->releaseDate}";
        }
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
$product1 = new construct_product("Intel 12500H", "Intel", "Processor",
                                 "Rp. XX.XXX.XXX", 0, 12, "CPU");

$product2 = new construct_product("Asus TUF", "Asus", "Laptop",     
                                "Rp. XX.XXX.XXX", 2020, null, "Gaming");

echo $product1->getAllInfo();
echo "<br>";
echo $product2->getAllInfo();





