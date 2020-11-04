<?php

namespace App\Marsupials;

class Wombat {

    private $name;
    private $numberOfHugs = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sayHelloTo($wombat)
    {
        return "Hello {$wombat->name}";
    }

    public function giveHug()
    {
        $this->numberOfHugs += 1;
        return $this;
    }

    public function howManyHugs()
    {
        return $this->numberOfHugs;
    }
    
}