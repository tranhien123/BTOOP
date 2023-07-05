<?php
class Point2D {
    protected $Xa;
    protected $Ya;
    protected $Xb;
    protected $Yb;
    public function __construct($Xa, $Ya, $Xb, $Yb)
    {
        $this->Xa = $Xa;
        $this->Ya = $Ya;
        $this->Xb = $Xb;
        $this->Yb = $Yb;
    }
    public function calSpace() {
        return sqrt(($this->Xb - $this->Xa)*($this->Xb - $this->Xa) + ($this->Yb - $this->Ya)* ($this->Yb - $this->Ya));
    }

}

$Xa = 13;
$Ya = 3;
$Xb = 12;
$Yb = 5;
$less2 = new Point2D($Xa, $Ya, $Xb, $Yb);
echo "Space: ". $less2->calSpace() . "\n";
echo "<br />";
?>