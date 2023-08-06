<?php
    

$colors=array("RED","BLUE","WHITE","YELLOW");
echo"<pre>";
print_r($colors);
    
echo"<pre>";
$lower_colors = array_map('strtolower', $colors);
echo"<pre>";
print_r($lower_colors);
echo"<pre>";
?>
