<?php

namespace App\Recipes;

class Recipe {
    
    private $name;
    private $ingredients = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addIngredient($ingredientObj,$amount)
    {
        $ingredientObj['amount'] = $amount;
        $this->ingredients[] = $ingredientObj;
        dump($ingredientObj);
    }
    

}