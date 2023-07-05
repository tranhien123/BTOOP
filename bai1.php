<?php

class Rectangle {
    protected $length;
    protected $width;
    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }
    public function calArea() {
        return $this->length * $this->width;
    }
    public function calPerimeter() {
        return ($this->length + $this->width) * 2;
    }
}

$length = 13;
$width = 3;
$less2 = new Rectangle($length, $width);
echo "Area of rectangle: ". $less2->calArea() . "\n";
echo "Perimeter of retangle: ". $less2->calPerimeter();
echo "<br />";
?>