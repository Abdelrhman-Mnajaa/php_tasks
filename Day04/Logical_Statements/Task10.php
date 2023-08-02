<!-- // 10.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18. -->
<?php
function checkEligibilityToVote($age) {
    $votingAge = 18;
    return ($age >= $votingAge);
}

// Sample Input
$age = 20;

if (checkEligibilityToVote($age)) {
    echo "You are eligible to vote!";
} else {
    echo "You are not eligible to vote. You must be at least 18 years old.";
}
?>
