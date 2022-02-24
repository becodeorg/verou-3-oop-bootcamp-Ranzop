<?php
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

$banana = new stdClass;
$banana->cost = 1;
$banana->amount = 6;
$banana->tax = 0.06;
print_r($banana);
$bananaArray = (array)$banana;
print_r($bananaArray);

require "./Fruit.php";

$banana = new Fruit (6, 1, 0.06);


echo $banana->getInfo();