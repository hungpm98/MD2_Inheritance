<?php
include_once "Shape.php";
class Circle extends Shape
{
    public  $radius;

     public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

     public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }

    #[Pure] public function calculatePerimeter(): float
    {
        return pi() * $this->radius * 2;
    }
}