<!-- 18.	Write a PHP script to remove comma(s) from the following numeric string.
 
Sample Output: '2,543.12'
Expected Output: 2543.12
  -->
<?php
$str1 = "2,543.12";
echo $str1;
echo "<br>";

$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
?>