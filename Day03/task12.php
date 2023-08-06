<?php
$array1 = array("abcd","abc","de","hjjj","g","wer");
$array2 = array_map('strlen', $array1);
echo"<pre>";
echo "The shortest array length is " . min($array2) ;
echo"<pre>";
echo " The longest array length is " . max($array2).'.';
echo"<pre>";
?>