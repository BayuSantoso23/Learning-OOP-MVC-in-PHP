<?Php

class Processor extends Product implements ProductInfo{
    public $totalCores;

    public function __construct($title = "Asus Vivobook", $brands = "Asus", 
                                $category = "Laptop", $price = 100, $totalCores = 4){

        parent::__construct($title, $brands, $category, $price);
                            
        $this->totalCores = $totalCores;
    }

    public function getInfo(){
        $str = "{$this->title}, ($this->brands) | (Rp. {$this->price}) ";
        return $str;
    }

    public function getProductInfo()
    {
        $str = "{$this->category} : ". $this->getInfo() ." - Core : {$this->totalCores} ";
        return $str;
    }
}