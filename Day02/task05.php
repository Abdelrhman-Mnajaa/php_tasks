<!-- 
    5.	Write a PHP script to extract the username from the following email address. 

Sample Output: 'info@orange.com'
Expected Output: 'info'
 

-->
<?php
$str="info@orange.com";
echo substr($str,0,strpos($str,'@'))
?>