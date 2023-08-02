<!-- // 5.	Write in PHP script to check if the given positive number is a multiple of 3.
// Sample Input: number = 20
// Sample Output: ‘false’
 -->
 <?php
function isMultipleOf3($number) {
    // A number is a multiple of 3 if the remainder of division by 3 is 0.
    return ($number % 3 === 0);
}

// Sample Input
$number = 20;

if (isMultipleOf3($number)) {
    echo "true";
} else {
    echo "false";
}
?>
