<?php

abstract class Product{
    // Variable Decleration (Property)
    protected $title,
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
    
    abstract public function getInfo();
    
}