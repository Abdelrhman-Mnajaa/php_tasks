<!-- // 11.	Write php script  to check whether a number is positive, negative or zero

// Sample Input: -60
// Sample Output: ‘Negative’ -->

<?php
function checkNumber($number) {
    if ($number > 0) {
        return 'Positive';
    } elseif ($number < 0) {
        return 'Negative';
    } else {
        return 'Zero';
    }
}

// Sample Input
$number = -60;

$output = checkNumber($number);
echo $output;
?>
