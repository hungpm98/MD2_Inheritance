<?php
include_once 'Circle.php';
include_once 'Cylinder.php';

$circle1 = new Circle(5,"Yellow");
$cylinder = new Cylinder(6,"Blue",3);
echo  $circle1;
echo "<br>";
echo $cylinder;