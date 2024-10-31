<?php

// Manual Way
// require_once 'Product/ProductInfo.php';
// require_once 'Product/Product.php';
// require_once 'Product/Laptop.php';
// require_once 'Product/Processor.php';
// require_once 'Product/DisplayProductInfo.php';
// require_once 'Product/User.php';

// require_once 'Service/User.php';

// Autoloading
spl_autoload_register(function($class){
    // Explode separate a string into array 
    // App\Service\User = ["App", "Product", "User"]
    $class = explode('\\', $class);

    // Taking the end of array 
    // User
    $class = end($class);
    require_once __DIR__ . '/Product/' . $class . '.php';
});

spl_autoload_register(function($class){

    $class = explode('\\', $class);

    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php';
});