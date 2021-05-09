<?php
include_once "class_lib.php";

$rectangle = new Rectangle(10,20);
echo $rectangle->width."<br>";
echo $rectangle->height."<br>";

echo $rectangle->getPerimeter();
echo $rectangle->getArea(); //
echo ("Your Rectangle". $rectangle->display());