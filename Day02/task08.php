<!-- 8.	Write a PHP script to replace the first word of the sentence with another word.

Sample Output: 'That new trainee is so genius.'
Sample Word: 'Our'
Expected Result: Our new trainee is so genius.
  -->

<?php 


$str ='That new trainee is so genius.';
$word='Our';

echo preg_replace('/That/', 'Our', $str);


?>
