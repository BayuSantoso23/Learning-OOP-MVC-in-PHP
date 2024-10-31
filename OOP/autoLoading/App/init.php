<?php

// Manual Way
// require_once 'Product/ProductInfo.php';
// require_once 'Product/Product.php';
// require_once 'Product/Laptop.php';
// require_once 'Product/Processor.php';
// require_once 'Product/DisplayProductInfo.php';

// Autoloading
spl_autoload_register(function($class){
    require_once __DIR__ . '/Product/' . $class . '.php';
});