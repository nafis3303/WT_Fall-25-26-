<?php
 
$_GET['x'] = 10;
 
$info = [
    "Alice" => 45,
    "Bob"   => 60,
    "Cara"  => 75,
    "David" => 30,
    "Eva"   => 49,
    "Frank" => 55,
    "Grace" => 90,
    "Hank"  => 20,
    "Ivy"   => 47,
    "Jack"  => 70
];
 
function tricky($arr, $n) {
    $i = 1;
 
    foreach ($arr as $name => $marks) {
        $num = (int)$marks * (int)$n;
 
        switch ($i) {
            case 1:
                echo strlen($name) . "\n";
                break;
 
            case 2:
                echo substr($name, 0, 2) . "\n";
                break;
 
            case 3:
                echo strtoupper($name) . "\n";
                break;
 
            case 4:
                echo strrev($name) . "\n";
                break;
 
            case 5:
                echo ($num / 5) . "\n";
                break;
 
            case 6:
                echo ($num % 9) . "\n";
                break;
 
            case 7:
                echo ($num > 100 ? "High" : "Low") . "\n";
                break;
 
            case 8:
                echo gettype($num) . "\n";
                break;
 
            case 9:
                echo ($marks + $i) . "\n";
                break;
 
            case 10:
                echo implode("-", str_split($name)) . "\n";
                break;
        }
 
        $i++;
    }
}
 
tricky($info, $_GET['x']);
 
?>