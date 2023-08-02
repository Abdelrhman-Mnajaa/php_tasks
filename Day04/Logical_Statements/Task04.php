<!-- // 4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
// Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
// Sample Output: ‘false’ -->

<?php
function checkSumEquals30($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    return ($sum === 30) ? $sum : false;
}

// Sample Input
$firstInteger = 10;
$secondInteger = 10;

$output = checkSumEquals30($firstInteger, $secondInteger);
echo $output;
?>
