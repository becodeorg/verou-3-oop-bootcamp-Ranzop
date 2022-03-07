<?php

class Item
{
    public int $amount;
    public float $cost;


public function __construct(int $amount, float $cost)
    {
        $this ->amount = $amount;
        $this ->cost = $cost;
    }

}