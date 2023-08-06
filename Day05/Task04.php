
<!-- 4.	Write a PHP function to swap to variables?

Sample Input:  x = 12     y= 10
Expected Output: y=12   x=10  -->

<?php
        $a = 15;
        $b = 27;
        
        // Swap Logic

        echo "\nThe number before swapping is:\n";
        echo "Number a =".$a." and b=".$b;

        $temp = $a;
        $a = $b;
        $b = $temp;
        
        echo "\nThe number after swapping is: \n";
        echo "Number a =".$a." and b=".$b."\n";
        ?>
