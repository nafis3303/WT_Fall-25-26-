<?php

$name = "Nafis";
$age = 22;
$dept = "CSE";
$marks = array(85,75,90);

function totalMarks($arr) {
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }
    return $sum;
}
$total = totalMarks($marks);

if($total >= 240) {
    $grade = "A+";
} elseif($total >= 210) {
    $grade = "A";
} elseif($total >= 180) {
    $grade = "B";
} else {
    $grade = "C";
}

switch($dept) {
    case "CSE":
        $department = "CSE";
        break;
    case "EEE":
        $department = "EEE";
        break;
    case "BBA":
        $department = "BBA";
        break;
    default:
        $department = "Unknown";
        break;
}

class Student{
    public $studentName;
    function set_name($n) {
        $this->studentName = $n;
    }
    function get_name() {
        return $this->studentName;
    }

}
$s=new Student();
$s->name="Nafis";

echo "<h3>Student Report</h3>";
echo "Name: " . $s->get_name() . "<br>";
echo "Age: $age <br>";
echo "Department: $dept <br>";
echo "Department Info: $message <br><br>";
echo "Student ID: " . $info["id"] . "<br>";
echo "Semester: " . $info["semester"] . "<br><br>";
echo "Marks: <br>";
foreach($marks as $m){
    echo $m . "<br>";
}
echo "<br>Total Marks: $total <br>";
echo "Grade: $grade <br>";
?>

