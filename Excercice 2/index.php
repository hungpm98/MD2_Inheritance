<?php

include_once 'Point2D.php';
include_once 'Point3D.php';

$point = new Point3D(2,3,4);
print_r( $point->toString());