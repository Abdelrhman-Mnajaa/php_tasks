


<!-- // 2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
// Sample Input: 27
// Sample Output: ‘It is summertime!’ -->

<?php
function getSeason($temperature) {
    // If the temperature is below 20, it's winter; otherwise, it's summer.
    return ($temperature < 20) ? 'winter' : 'summer';
}

// Sample Input
$temperature = 27;

$season = getSeason($temperature);

if ($season === 'summer') {
    echo "It is summertime!";
} else {
    echo "It is winter!";
}
?>

