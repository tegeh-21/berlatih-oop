<?php

class Frog extends Animal {
    public $name;

    function __construct($name) {
        parent::__construct($name);
        $this->legs=4;
    }

    function jump() {
        echo "hop hop";
    }
}