<!-- // 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’

// Range	Grade
// <60	F
// <70	D
// <80	C
// <90	B
// <100	A -->

<?php
function calculateGrade($scores) {
    $average = array_sum($scores) / count($scores);

    if ($average < 60) {
        return 'F';
    } elseif ($average < 70) {
        return 'D';
    } elseif ($average < 80) {
        return 'C';
    } elseif ($average < 90) {
        return 'B';
    } else {
        return 'A';
    }
}

// Sample Inputs
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];

$grade = calculateGrade($scores);
echo $grade;
?>
