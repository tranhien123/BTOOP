<?php
class BookRoom {
    private $name;
    private $checkInDate;
    private $numberOfNights;

    public function __construct($name, $checkInDate, $numberOfNights) {
        $this->name = $name;
        $this->checkInDate = $checkInDate;
        $this->numberOfNights = $numberOfNights;
    }

    public function calculateTotalAmount($roomPrice) {
        return $roomPrice * $this->numberOfNights;
    }
}
$name = ("Room 302");
$checkInDate = ("2023/07/05");
$numberOfNights = 3;
$less10 = new BookRoom($name, $checkInDate, $numberOfNights);
echo "Total = ". $less10->calculateTotalAmount(180,000);
?>