<?php
include_once 'Shape.php';

class Triangle extends Shape
{
    public $side1;
    public $side2;
    public $side3;
    public $color;

    public function __construct($color, $side1 = 1, $side2 = 1, $side3 = 1)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
        $this->color = $color;
    }

    public function getArea()
    {
        $dienTich = ($this->side1 * $this->side1) * (sqrt(3) / 4);
        return $dienTich;
    }

    public function getPerimeter()
    {
        $chuVi = $this->side1 + $this->side2 + $this->side3;
        return $chuVi;
    }

    public function toString()
    {
        return 'Chu vi: ' . $this->getPerimeter() . ', Diện tích: ' . $this->getArea() . ', Màu: ' . $this->color;
    }


}