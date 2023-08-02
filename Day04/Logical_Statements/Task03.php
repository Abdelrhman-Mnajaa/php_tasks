<!-- 

// 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
// Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
// Sample Output: ( 2 + 2 ) * 3 = 12
// Sample Output: ‘It is summertime!’
  -->

  <?php
function calculateSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    if ($firstInteger === $secondInteger) {
        $tripleSum = $sum * 3;
        return "( $firstInteger + $secondInteger ) * 3 = $tripleSum";
    } else {
        return "$firstInteger + $secondInteger = $sum";
    }
}

// Sample Input
$firstInteger = 2;
$secondInteger = 2;

$output = calculateSum($firstInteger, $secondInteger);
echo $output;
?>
