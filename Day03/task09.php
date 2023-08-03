<?php
    
    
    $colors = array( "Red", "Green", "Black", "White"); 
    echo"<pre>";
    print_r($colors);
    
    echo"<pre>";

    $upper_colors = array_map('strtoupper', $colors);
    echo"<pre>";
    print_r($upper_colors);
    echo"<pre>";
    ?>