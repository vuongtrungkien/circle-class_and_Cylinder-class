<?php
include "class/Circle.php";
include "class/Cylinder.php";


$circle = new Circle(30,"yellow");
$circle->toString();
$cylinder = new Cylinder(30,"black",50);
echo "<br>";
$cylinder->toString();