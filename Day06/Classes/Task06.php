<?php


// 6. Write a PHP script to convert a string to Date and DateTime.
// Sample Date : '12-08-2004'
// Expected Output : 2004-12-08
// Note : PHP considers '/' to mean m/d/Y format and '-' to mean d-m-Y format.

$dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
echo $dt;

?>