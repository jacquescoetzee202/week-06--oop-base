<?php

namespace App;

class Person {

    private $firstName;
    private $lastName;

    public function __construct($firstName,$lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    function sayHelloTo($personObj)
    {
        return "Hello {$personObj->firstName} {$personObj->lastName}";
    }
}