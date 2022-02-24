<?php

class Fruit
{
    public $amount;
    public $cost;


    public function __construct(int $amount,float $cost)
        {
            $this ->amount = $amount;
            $this ->cost = $cost;
        }


    public function getInfo()
    {
    echo "This beverage is $this->temperature and $this->color, and it costs $this->price"; 
    }
    public function setColor($colorChange)
    {
        // here we are saving it to our property
        $this->color = $colorChange;
        return $this->color;
    }
}