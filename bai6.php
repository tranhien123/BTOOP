<?php
class Car {
    private $brand;
    private $color;
    private $year;

    public function __construct($brand, $color, $year) {
        $this->brand = $brand;
        $this->color = $color;
        $this->year = $year;
    }

    public function displayInfo() {
        echo "Brand: " . $this->brand . "<br>";
        echo "Color: " . $this->color . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}
$brand = ("BMW");
$color = ("Black");
$year = 2011;
$less6 = new Car($brand, $color, $year);
echo "Car information is: <br>";
echo $less6->displayInfo();
?>
