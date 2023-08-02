<!-- 
// 9.	 Write php script to make a calculator, the calculator should contain the four main operations 

// e.	Addition
// f.	Subtraction
// g.	Multiplication
// h.	Division -->

<?php
function add($num1, $num2) {
    return $num1 + $num2;
}

function subtract($num1, $num2) {
    return $num1 - $num2;
}

function multiply($num1, $num2) {
    return $num1 * $num2;
}

function divide($num1, $num2) {
    if ($num2 == 0) {
        return "Cannot divide by zero!";
    }
    return $num1 / $num2;
}

// Sample Inputs
$num1 = 10;
$num2 = 5;

// Addition
$additionResult = add($num1, $num2);
echo "Addition: " . $additionResult . "<br>";

// Subtraction
$subtractionResult = subtract($num1, $num2);
echo "Subtraction: " . $subtractionResult . "<br>";

// Multiplication
$multiplicationResult = multiply($num1, $num2);
echo "Multiplication: " . $multiplicationResult . "<br>";

// Division
$divisionResult = divide($num1, $num2);
echo "Division: " . $divisionResult . "<br>";
?>
