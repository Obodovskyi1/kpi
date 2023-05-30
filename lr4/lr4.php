<?php

$books = [
    'book1' => 'Book Title 1',
    'book2' => 'Book Title 2',
    'book3' => 'Book Title 3',
];

echo $books['book2']; // Output: Book Title 2


$num = 42;
$str = (string) $num;   // Convert to string
$float = (float) $num;  // Convert to float
$bool = (bool) $num;    // Convert to boolean

$str = "123";
$num = (int) $str;      // Convert to integer

$arr = (array) $str;    // Convert to array
$obj = (object) $arr;   // Convert to object


$tools = ['hammer', 'screwdriver', 'wrench'];

foreach ($tools as $tool) {
    echo  "</br>" . $tool;
}

class Car {
    protected $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }

    public function startEngine() {
        echo "</br>" . "Engine started";
    }
}

class SportsCar extends Car {
    public function turboBoost() {
        echo "</br>" . "Turbo boost activated!";
    }
}

$car = new SportsCar('Ferrari');
$car->startEngine();   // Output: Engine started.
$car->turboBoost();    // Output: Turbo boost activated!



?>
