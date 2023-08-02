<?php
function floydTriangle($n) {
    $num = 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo PHP_EOL;
    }
}

// Sample Input
$n = 5;

floydTriangle($n);
?>
