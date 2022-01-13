<?php

class Circle
{
    protected  $raduis;
    protected  $color;
    public function __construct($raduis,$color)
    {
        $this->raduis = $raduis;
        $this->color = $color;
    }

    public function getRaduis()
    {
        return $this->raduis;
    }

    public function setRaduis($raduis): void
    {
        $this->raduis = $raduis;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function __toString()
    {
        return "Bán Kính Là: ".$this->getRaduis() .', Màu : '.$this->getColor();
    }

}