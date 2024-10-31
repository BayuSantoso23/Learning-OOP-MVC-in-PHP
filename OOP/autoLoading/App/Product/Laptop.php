<?php

class Laptop extends Product implements ProductInfo{
    public $releaseDate;

    public function __construct($title = "Asus Vivobook", $brands = "Asus", 
                                $category = "Laptop", $price = 100, $releaseDate = 2000){
        
        parent::__construct($title, $brands, $category, $price);

        $this->releaseDate = $releaseDate;

    }

    public function getInfo(){
        $str = "{$this->title}, ($this->brands) | (Rp. {$this->price}) ";
        return $str;
    }
    public function getProductInfo()
    {
        $str = "{$this->category} : ". $this->getInfo() ." - Resleased in ({$this->releaseDate}) ";
        return $str;
    }
}