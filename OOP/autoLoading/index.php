<?php

require_once 'App/init.php';

$product1 = new Processor("Intel 12500H", "Intel", "Processor", 100, 12);

$product2 = new Laptop("Asus TUF", "Asus", "Laptop", 200, 2020);

$PrintProduct = new displayProductInfo();
$PrintProduct->addProduct($product1);
$PrintProduct->addProduct($product2);
echo $PrintProduct->displayProduct();
  