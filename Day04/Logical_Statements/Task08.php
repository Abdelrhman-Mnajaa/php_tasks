<!-- 
// 8.	Write PHP script to calculate the monthly electricity bill according to these rules
 
// a.	For first 50 units – 2.50 JOD/Unit
// b.	For next 100 units – 5.00 JOD/Unit
// c.	For next 100 units – 6.20 JOD/Unit
// d.	For units above 250 – 7.50 JOD/Unit -->

<?php
function calculateElectricityBill($units) {
    $totalBill = 0;

    if ($units <= 50) {
        // For the first 50 units, the rate is 2.50 JOD per unit.
        $totalBill = $units * 2.50;
    } elseif ($units <= 150) {
        // For the next 100 units (51-150), the rate is 5.00 JOD per unit.
        $totalBill = 50 * 2.50 + ($units - 50) * 5.00;
    } elseif ($units <= 250) {
        // For the next 100 units (151-250), the rate is 6.20 JOD per unit.
        $totalBill = 50 * 2.50 + 100 * 5.00 + ($units - 150) * 6.20;
    } else {
        // For units above 250, the rate is 7.50 JOD per unit.
        $totalBill = 50 * 2.50 + 100 * 5.00 + 100 * 6.20 + ($units - 250) * 7.50;
    }

    return $totalBill;
}

// Sample Input
$units = 300;

$output = calculateElectricityBill($units);
echo "Monthly Electricity Bill: " . $output . " JOD";
?>
