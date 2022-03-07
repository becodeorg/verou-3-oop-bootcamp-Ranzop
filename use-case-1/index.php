<?php
declare(strict_types=1);

require './Type.php';


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// approach without class
$bananas = 1;
$apples = 1.5;
$wineBottle = 10;


$price = ($bananas*6) + ($apples*3) + ($wineBottle*2);
echo $price. '<br>';

$bananaTax = (($bananas*6)/100*6);
echo $bananaTax . '<br>';

$applesTax = (($apples*3)/100*6);
echo $applesTax . '<br>';

$wineTax = (($wineBottle*2)/100*21);
echo $wineTax . '<br>';


// another approach but with class; or at least a way to make an object
// wondering how I could change the name of the Object, as it now prints
// stdClass Object ( [cost] => 1 [amount] => 6 [tax] => 0.06 )
// meaning that the object is called stdClass apparently

/* $banana = new stdClass;
$banana->cost = 1;
$banana->amount = 6;
$banana->tax = 0.06;
print_r($banana);
$bananaArray = (array)$banana;
print_r($bananaArray); */



/* echo $banana->getInfo();
echo $wine->getInfo();

echo $banana->getPrice();
echo $wine->getPrice(); */

// Using this approach, I've added one property per class, i.e. I've used each class
// as an additional property.
// This approach ignores the fact that classes are supposed to be coherent
// sets of properties
// but, it does give maximum control

$basket = [
    "apple" => new Item (3, 1.5),
    "banana" => new Item (6, 1),
    "wine" => new Item (2, 10),
];

var_dump($basket);

$basketWithBTW = [
    "apple" => new BTW (3, 1.5, 0.06),
    "banana" => new BTW (6, 1, 0.06),
    "wine" => new BTW (2, 10, 0.21),
];

var_dump($basketWithBTW);

$basketBTWAndType = [
    "apple" => new Type (3, 1.5, 0.06, "fruit"),
    "banana" => new Type (6, 1, 0.06, "fruit"),
    "wine" => new Type (2, 10, 0.21, "alcoholic beverage"),
];

echo '<pre>';
var_dump($basketBTWAndType);
echo '</pre>';

foreach ($basketBTWAndType as $i => $product){
$TotalCost =$product->calcTotalCost($basketBTWAndType);
echo $TotalCost;
}

/* foreach ($basketBTWAndType as $i => $product){
$TotalCost =$product->calcTotalCost($basketBTWAndType);
echo $TotalCost;
} */


/* Consider the same basket as in use case 1.
The shop owner wants to have a way to have 50% off every fruit. 
Can you find a way to implement the discount once,
and re-use it efficiently for every fruit? */

//TODO: write algorithm that targets the Type property
//TODO: if is fruit, reduce price by 0.5