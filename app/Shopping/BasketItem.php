<?php

namespace App\Shopping;

class BasketItem {
    
    private $price;
    private $item;

    public function __construct($item,$price)
    {
        $this->price = $price;
        $this->item = $item;
    }

    public function type()
    {
        return $this->item;
    }

    public function price()
    {
        return $this->price;
    }

    public function priceFormatted()
    {
        $formated = number_format($this->price,2,'.','');
        return "£{$formated}";
    }

}