<?php
require "./Fruit.php";

class Wine extends Fruit
{
    public int $amount;
    public float $cost;
    public float $BTW;


    public function __construct(int $amount,float $cost, float $BTW)
        {
            parent:: __construct($amount, $cost, $BTW);
        }


    public function getInfo()
    {
    return "<br>This fruit costs €$this->cost <br>
    and we ordered $this->amount;<br> 
    the VAT on this item is $this->BTW<br>
    meaning that, the total VAT to be paid is<br>
    €" . $this->cost*$this->amount*$this->BTW . " <br>
    The government, and the taxpayer thank you for your business"; 
    }
}