<?php
echo '<table cellpadding="3px" cellspacing="0px">';
for ($i = 1; $i <= 6; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 5; $j++) {
        $result = $i * $j;
        echo '<td>' . $j . ' * ' . $i . ' = ' . $result . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
