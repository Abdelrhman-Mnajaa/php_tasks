<?php

// Logical Statements and Operators           		          Duration: 5 Hour
// 1.	Write a PHP script to see if the specified year is a leap year or not.
// Sample Input: 2013
// Sample Output: ‘This year is not a leap year’




function isLeapYear($year) {
    // A year is a leap year if it is divisible by 4
    // but not divisible by 100, except when it is divisible by 400.
    return ($year % 4 == 0) && (($year % 100 != 0) || ($year % 400 == 0));
}

// Sample Input
$year = 2013;

if (isLeapYear($year)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}

?>