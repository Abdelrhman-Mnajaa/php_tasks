<!-- 3.	Write a PHP script to check whether the sentence contains a specific word.

Sample Output: ‘I am a full stack developer at orange coding academy’
Sample Word: ‘Orange’
Expected Output: ‘Word Found!’
 -->
<?php


 $txt='I am a full stack developer at orange coding academy';

if(str_contains($txt,'orange'))
  echo 'Word Found!';


 ?>