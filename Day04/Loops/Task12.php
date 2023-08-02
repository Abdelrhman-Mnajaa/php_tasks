<?php
$alphabets = range('A', 'Z');
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5 - $i; $j++) {
        echo " ";
    }
    for ($k = 0; $k <= $i; $k++) {
        echo $alphabets[$k] . " ";
    }
    echo PHP_EOL;
}
for ($i = 4; $i >= 0; $i--) {
    for ($j = 0; $j < 5 - $i; $j++) {
        echo " ";
    }
    for ($k = 0; $k <= $i; $k++) {
        echo $alphabets[$k] . " ";
    }
    echo PHP_EOL;
}
?>
