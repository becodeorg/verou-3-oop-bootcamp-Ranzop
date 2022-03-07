<?php

require "./Item.php";

class BTW extends Item
{
    public int $amount;
    public float $cost;
    public float $BTW;
    

public function __construct(int $amount,float $cost, float $BTW)
    {
        parent:: __construct($amount, $cost);
        $this->BTW = $BTW;
    }


    public function getInfo()
    {
    echo "This fruit costs $this->cost and we ordered this $this->amount many"; 
    }
    public function setColor($colorChange)
    {
        // here we are saving it to our property
        $this->color = $colorChange;
        return $this->color;
    }
}