<?php

class DisplayProductInfo{

    // Array Declaration
    public $ProductList = array();

    public function addProduct(Product $product){
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