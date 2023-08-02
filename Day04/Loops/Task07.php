<?php
function fibonacci($n) {
    $fibonacciSequence = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }
    return $fibonacciSequence;
}

// Sample Input
$n = 10;

$fibonacciSequence = fibonacci($n);
echo implode(", ", $fibonacciSequence);
?>
