<!-- 3.	 Write a PHP script to check if the all string characters are lower cases

Sample Input:  remove
Expected Output: Your String is Ok  -->

<?php
function is_str_lowercase($str1)
   {
    for ($sc = 0; $sc < strlen($str1); $sc++) {
	      if (ord($str1[$sc]) >= ord('A') &&
          ord($str1[$sc]) <= ord('Z')) {
      return false;
         }
         }
      return true;
       }
       
$Str="abc def ghi";
$StrC="abc Fef ghi";

if(is_str_lowercase('abc def ghi'))
  echo "Your String is Ok";
  else 
  echo "Your String is Not Ok";
 

 
?>

