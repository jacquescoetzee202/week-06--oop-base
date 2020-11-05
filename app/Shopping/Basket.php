<?php

namespace App\Shopping;

class Basket {

    private $basket;

    public function __construct()
    {
        $this->basket = collect();
    }

    public function add($basketItem)
    {
        $this->basket->push($basketItem);
        return $this; 
    }

    private function sum()
    {
        return $this->basket->reduce(fn($total,$item) => $total + $item->price());
    }

    public function total()
    {
        $total = $this->sum();
        $formated = number_format($total,2,'.','');
        return "£{$formated}";
    }

    public function items()
    {
        return $this->basket->map(fn($basketItem)=>$basketItem->type())->all();
    }

}