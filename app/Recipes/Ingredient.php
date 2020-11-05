<?php

namespace App\Recipes;

class Ingredient {
    private $name;
    private $dietaryInfo;

    public function __construct($name,$dietaryInfo)
    {
        $this->name = $name;
        $this->dietaryInfo = $dietaryInfo;
    }

    public function name()
    {
        return $this->name;
    }

    public function vegan()
    {
        return collect($this->dietaryInfo)->search('animal produce') === false;
    }
}