<?php

class BTW extends Fruit
{
    public $percentage;
    

    public function __construct(int $amount,float $cost)
        {
            $this ->amount = $amount;
            $this ->cost = $cost;
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