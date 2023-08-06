
        <!-- 5.	Write a PHP function to swap to variables?

        Sample Input:  x = 12     y= 10
        Expected Output: y=12   x=10  -->

        <?php
        $a = 15;
        $b = 276;
        echo "\nBefore swapping:  ". $a . ',' . $b;
        list($a, $b) = array($b, $a);
        echo "\nAfter swapping:  ". $a . ',' . $b."\n";
        ?>
