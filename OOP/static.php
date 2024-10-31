<?php

class staticExample{
    public static $number = 0;

    public static function totalNumber(){
        return "Total number : " . self::$number++;
    }
}

// Static Makes the element in class can be acessed without instantiation
echo staticExample::$number;
echo "<br>";

echo staticExample::totalNumber();
echo "<br>";

echo staticExample::totalNumber();
echo "<br>";

echo "<hr>";

class staticNumberExample{
    public static $number = 0;

    public function totalNumber(){
        return "Total number : " . self::$number++;
    }
}

// Static makes the value in the class same, 
// even though there is new obj decl.

$obj1 = new staticNumberExample;
echo $obj1->totalNumber();
echo "<br>";
echo $obj1->totalNumber();
echo "<br>";
echo $obj1->totalNumber();

echo "<hr>";

$obj2 = new staticNumberExample;
echo $obj2->totalNumber();
echo "<br>";
echo $obj2->totalNumber();
echo "<br>";
echo $obj2->totalNumber();