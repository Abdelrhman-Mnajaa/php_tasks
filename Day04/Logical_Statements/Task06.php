<!-- // 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
// Sample Input: number = 50
// Sample Output: ‘true’ -->

<?php
function isInRange($number) {
    // Check if the number is between 20 and 50 (inclusive).
    return ($number >= 20 && $number <= 50);
}

// Sample Input
$number = 50;

if (isInRange($number)) {
    echo "true";
} else {
    echo "false";
}
?>
