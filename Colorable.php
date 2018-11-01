<?php
interface ColorAble
{
    function howToColor();
}
class Square implements ColorAble
{
    private $height;
    public function __construct($height)
    {
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->height * $this->height;
    }
    function howToColor()
    {
        echo 'color all four side';
        // TODO: Implement howToColor() method.
    }
}
$square = new Square(5);
echo  'Area of Square : ' . $square->getArea() . '<br>';
$square->howToColor();