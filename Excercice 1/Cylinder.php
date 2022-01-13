<?php
include_once "Circle.php";
class Cylinder extends Circle
{
    public $height;

    public function __construct($height,$color,$radius)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function setHeight($height): void
    {
        $this->height = $height;
    }



    public function __toString()
    {
        return "Chiều Cao Là: ". $this->getHeight() . ', Màu : '. $this->getColor().', Bán Kính : '.$this->getRaduis();
    }

}