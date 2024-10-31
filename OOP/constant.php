<?php

// 2 Types of constant

// define, Global constant, cannot be placed in class
define('NAME', 'TIAN');
echo NAME;

echo "<br>";

// const, can be place in class
const AGE = 89;
echo AGE;

echo "<hr>";

class cons{
    const MYAGE = 19;
}

echo cons::MYAGE;

echo "<hr>";

// Types of Magic Constant

// Printing Line in echoed place
echo __LINE__;
echo "<br>";

// Printing File Address
echo __FILE__;
echo "<br>";

// Printing File Directory
echo __DIR__;
echo "<br>";

function hello() {
    // Printing Current Function
    return __FUNCTION__;
}

echo hello();
echo "<br>";

class helow{
    // Printing Current Class
    public $test = __CLASS__;
}
$obj = new helow();
echo $obj->test;
echo "<br>";

// Use to Print Lines of code fro parent class without inheritance
// echo __TRAIT__;

class helo2{
    // Printing Current Method
    public function methodtest(){
        return $test = __METHOD__;
    }
   
}
$obj = new helo2();
echo $obj->methodtest();
echo "<br>";

// namespace MyApp;

// class MyClass {
//     // Printing Current Nampespace
//     public function showNamespace() {
//         echo "Current namespace: " . __NAMESPACE__;
//     }
// }

// $instance = new MyClass();
// $instance->showNamespace();

