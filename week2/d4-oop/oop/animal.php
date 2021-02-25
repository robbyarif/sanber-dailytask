<?php
class Animal 
{
    public $name;
    public $legs;
    public $cold_blooded;

    public function __construct($name, $legs=2, $cold_blooded=false) 
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }

    public function print() {
        echo "name: $this->name <br>";
        echo "legs: $this->legs <br>";
        echo "is cold blooded: ".($this->cold_blooded? "true": "false")."<br>";
    }
}
?>