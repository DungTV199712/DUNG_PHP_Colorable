<?php
interface Colorable
{
    function howToColor();
}

class Square implements Colorable
{
    function howToColor()
    {
        echo "Color all four sides" . PHP_EOL;
    }
}

class Rectangle
{

}

$square = new Square();
$square2 = new Square();
$rectangle = new Rectangle();
$shapes = [$square, $square2, $rectangle];
foreach ($shapes as $shape) {
    if ($shape instanceof Colorable) {
        $shape->howToColor();
    }
}