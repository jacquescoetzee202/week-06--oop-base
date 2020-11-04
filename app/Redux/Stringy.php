<?php

namespace App\Redux;

class Stringy {

    private $value;

    public function __construct($value){
        $this->value = $value;
    }

    public function lower(){
        $this->value = strtolower($this->value);
        return $this;
    }

    public function upper(){
        $this->value = strtoupper($this->value);
        return $this;
    }

    public function append($appendStr){
        $this->value = $this->value . $appendStr;
        return $this;
    }

    public function repeat($times){
        $this->value = str_repeat($this->value,$times);
        return $this;
    }

    public function get()
    {
        return $this->value;
    }

}