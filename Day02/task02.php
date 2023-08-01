<!-- 

2.Write a PHP script splitting the following numeric string to be a date format. 

Sample Output: '085119'
Expected Output: 08:51:19 

-->

<?php

$str1= '085119'; 

echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";

?>