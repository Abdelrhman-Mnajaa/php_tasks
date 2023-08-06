<!-- 
8.	Write a PHP function to remove duplicates from an array ?

Sample Input:  
$array1 = array(2, 4, 7, 4, 8, 4);

Expected Output:
$array1 = array(2, 4, 7, 8); -->


<?php

$numbers = array( 0 => 100, 
  1 => 200, 
  2 => 100, 
  3 => -10, 
  4 => -10, 
  5 => 0, 
); 

$uniq_numbers = array_keys(array_flip($numbers)); 
print_r($uniq_numbers);
?>

 
