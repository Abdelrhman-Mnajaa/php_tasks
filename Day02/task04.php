
<!--
    
4.	Write a PHP script to extract the file name from the URL. 

Sample Output: 'www.orange.com/index.php'
Expected Output: 'index.php'
 -->

 <?php
 
 $str="www.orange.com/index.php";
 echo substr($str,strpos($str,'/')+1);

 ?>