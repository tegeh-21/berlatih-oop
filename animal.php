<?php 

class Animal {
    public $name;
    public $legs;
    public $cold_blooded;

    function __construct($name) {
        $this->name = $name;
        $this->legs = 2;
        $this->cold_blooded = "false";
    }
}