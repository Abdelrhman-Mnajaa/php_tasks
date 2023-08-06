
<!-- 6.	Write a PHP function to check if a number is an Armstrong number or not ?
**Armstrong number is a number that is equal to the sum of cubes of its digits.

Sample Input:  407
Expected Output: 407 is Armstrong Number  -->

<?php
function isArmstrongNumber($number) {
  // Convert the number to a string to access its digits
  $number_str = (string) $number;

  // Get the number of digits in the input number
  $num_digits = strlen($number_str);

  // Initialize the sum of cubes of digits
  $sum = 0;

  // Calculate the sum of cubes of digits
  for ($i = 0; $i < $num_digits; $i++) {
      $digit = (int) $number_str[$i];
      $sum += pow($digit, 3);
  }

  // Check if the sum is equal to the original number
  if ($sum === $number) {
      return true;
  } else {
      return false;
  }
}

// Test the function
$number = 407;
if (isArmstrongNumber($number)) {
  echo $number . " is Armstrong Number";
} else {
  echo $number . " is not Armstrong Number";
}

?>
