<?php
function factorial($num) {
    $result = 1;
    for ($i = 1; $i <= $num; $i++) {
        $result *= $i;
    }
    return $result;
}

// Sample Input
$number = 5;

$factorial = factorial($number);
echo "Factorial of $number is: " . $factorial;
?>
