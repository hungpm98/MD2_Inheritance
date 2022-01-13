<?php
include_once "Rectangle.php";
include_once "Shape.php";

class Square extends Rectangle
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
}