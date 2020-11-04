<?php

namespace App\Shopping;

class Basket {

    private $basket = [];
    private $total = null;
    private $items = [];

    public function add($basketItem)
    {
        $this->basket[] = $basketItem;
        return $this; 
    }

    public function sum()
    {
        $this->total = collect($this->basket)->reduce(fn($total,$item) => $total + $item->price());
    }

    public function total()
    {
        $this->sum();
        $formated = number_format($this->total,2,'.','');
        return "£{$formated}";
    }

    public function items()
    {
        return collect($this->basket)->map(fn($basketItem)=>$basketItem->type())->all();
    }

}