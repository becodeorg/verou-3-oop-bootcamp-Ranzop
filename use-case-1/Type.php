<?php

require "./BTW.php";

class Type extends BTW
{
    public int $amount;
    public float $cost;
    public float $BTW;
    public string $type;


    public function __construct(int $amount, float $cost, float $BTW, string $type)
        {
            parent::__construct($amount, $cost, $BTW);
            $this ->type = $type;
        }


    public function calcTotalCost()
    {
    return "<br>This $this->type costs €$this->cost <br>
    and we ordered $this->amount;<br> 
    the VAT on this item is $this->BTW% <br>
    meaning that, the total VAT to be paid is
    €". $this->cost*$this->amount*$this->BTW . "<br>
    The amount to be paid before taxes is €" .$this->cost*$this->amount. "<br>
    The amount to be paid after reduction of taxes is €"
    .$this->cost*$this->amount-($this->cost*$this->amount*$this->BTW)."<br><br>
    The government, and the taxpayer thank you for your business"; 
    }

    public function getPrice()
    {
        return "The total price for the selected amount of $this->name is: " . $this->cost*$this->amount . "<br>";
    }

    public function getFruitDiscount()
    {
        if($type = "fruit"){
            $this->cost *= 0.5;
        }
    }
}