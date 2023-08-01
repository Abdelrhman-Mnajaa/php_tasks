<!-- 
6.	
Write a PHP script to get the last three characters from the string. 
Sample Output: 'info@orange.com'
Expected Output: 'com'

-->


<?php 

$str="info@orange.com";
echo substr($str,strlen($str)-3,strlen($str))


?>

