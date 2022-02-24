<?php

class Fruit
{
    public int $amount;
    public float $cost;
    public float $BTW;
    public string $discountMessage;


    public function __construct(int $amount,float $cost, float $BTW, string $discountMessage)
        {
            $this ->amount = $amount;
            $this ->cost = $cost;
            $this ->BTW = $BTW;
            $this ->discountMessage = $discountMessage;
        }

    public function getDiscount($discount)
    {
        $this->cost *= $discount;
        return $this->cost;
    }
    public function displayDiscountMessage ()
    {
        $this->discountMessage = "You're getting half price on all our items today! <br>";
        return $this->discountMessage;
    }

    public function getInfo()
    {
        return "<br>" . $this->discountMessage . "<br>This fruit costs €$this->cost <br>
        and we ordered $this->amount;<br> 
        the VAT on this item is $this->BTW<br>
        meaning that, the total VAT to be paid is<br>
        €" . $this->cost*$this->amount*$this->BTW . " <br>
        The government, and the taxpayer thank you for your business"; 
    }
}