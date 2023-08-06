<?php
$ascii='065';
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= 4; $j++) {
        echo chr($ascii);
    }
    $ascii+=1;
    echo "<br>";
}
?>
