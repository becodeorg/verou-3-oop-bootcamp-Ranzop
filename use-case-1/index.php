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
$appleTotalCost =$product->calcTotalCost($basketBTWAndType["apple"]);
echo $appleTotalCost;
}


/* Calculate the total price
Calculate how much of the total price is tax (fruit goes at 6%, wine is 21%) */