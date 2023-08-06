<!-- 
 
 
15.	Write a PHP script to remove trailing dashes from a string. 

Original String: 'The quick brown fox jumps over the lazy dog---'
Expected Output: 'The quick brown fox jumps over the lazy dog'
 
  -->
  
<?php
$my_str = 'The quick brown fox jumps over the lazy dog---';
echo $my_str;
echo "<br>";

echo rtrim($my_str, '-')."\n";
?>