<?php
include_once "Circle.php";
include_once "Shape.php";
class Cylinder extends Circle
{
    public int $height;

    public function __construct( $name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

     public function calculateArea(): float
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

     public function calculateVolume(): float
    {
        return parent::calculateArea() * $this->height;
    }
}