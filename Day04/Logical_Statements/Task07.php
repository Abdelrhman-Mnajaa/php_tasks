<!-- 
// 7.	Write PHP script to find the largest number between the three integers
// Sample Input: [ 1, 5, 9 ]
// Sample Output: 9 -->
<?php
function findLargestNumber($numbers) {
    // Initialize the largest number with the first element in the array.
    $largest = $numbers[0];

    // Loop through the remaining elements to find the largest.
    for ($i = 1; $i < count($numbers); $i++) {
        if ($numbers[$i] > $largest) {
            $largest = $numbers[$i];
        }
    }

    return $largest;
}

// Sample Input
$numbers = [1, 5, 9];

$output = findLargestNumber($numbers);
echo $output;
?>
