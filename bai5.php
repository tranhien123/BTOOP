<?php
class Student {
    private $studentId;
    private $fullName;

    public function __construct($studentId, $fullName) {
        $this->studentId = $studentId;
        $this->fullName = $fullName;
    }

    public function getStudentId() {
        return $this->studentId;
    }

    public function getFullName() {
        return $this->fullName;
    }
}

$studentId = 22;
$fullName = ("Tran Hien");
$less5 = new Student($studentId, $fullName);
echo "ID: ". $less5->getStudentId()."<br />";
 echo "Full Name: ". $less5->getFullName(). "<br />";
?>
