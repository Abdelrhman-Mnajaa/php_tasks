<!-- 11.	Write a PHP script to print the next letter of the inputted letter. 

Sample Character: 'a'
Expected Output: 'b'
Sample Character: 'z'
Expected Output: 'a'
 
  -->
<?php
$cha = 'a';
$cha1='z';
$next_cha = ++$cha; 
$next_cha1 = ++$cha1; 

//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
echo"<br>";
if (strlen($next_cha1) > 1) 
{
 $next_cha1 = $next_cha1[0];
 }
echo $next_cha1."\n";
?>