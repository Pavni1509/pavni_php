<?php
// Function to check if the number is Armstrong
function isArmstrong($number) {
    // Convert the number to a string to easily access each digit
    $digits = str_split($number);
    $numDigits = count($digits);
    
    $sum = 0;
    
    // Calculate the sum of each digit raised to the power of the total number of digits
    foreach ($digits as $digit) {
        $sum += pow($digit, $numDigits);
    }
    
    // Check if the sum equals the original number
    return $sum == $number;
}

// Example usage
$number = 153; // Change this value to test other numbers
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
echo "<br>";
 echo("This program is written by Pavni Suri-0221BC030");

?>
