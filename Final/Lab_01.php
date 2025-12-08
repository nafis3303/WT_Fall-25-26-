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