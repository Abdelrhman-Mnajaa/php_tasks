<!-- 13.	Write a PHP script to remove zeroes from the given number. 

Original String: '0000657022.24'
Expected Output: '65722.24'
  -->
<?php
$x = '000547023.24';
echo $x;
echo "<br>";
$str1 = ltrim($x, '0');
echo $str1."\n";
?>