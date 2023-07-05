<?php
class Product {
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Price: " . $this->price . "<br>";
        echo "Description: " . $this->description . "<br>";
    }
}
$name = ("TraSua");
$price = 25000;
$description = ("Black tea and black pearl");
$less9 = new Product($name, $price, $description);
echo "Product information is: <br>";
echo $less9->displayInfo();
?>