
<!-- 6.	Write a PHP function to check if a number is an Armstrong number or not ?
**Armstrong number is a number that is equal to the sum of cubes of its digits.

Sample Input:  407
Expected Output: 407 is Armstrong Number  -->

<?php
function armstrong_number($num) {
  $sl = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $sl; $i++) {
    $sum = $sum + pow((string)$num{$i},$sl);
  }
  if ((string)$sum == (string)$num) {
    return "True";
  } else {
    return "False";
  }
}
echo "Is 153 Armstrong number? ".armstrong_number(153);
echo "\nIs 21 Armstrong number? ".armstrong_number(21);
echo "\nIs 4587 Armstrong number? ".armstrong_number(4587);"\n";
?>
