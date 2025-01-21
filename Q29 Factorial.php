<?php
// Define the number
$number = 5;

// Initialize the factorial variable to 1
$factorial = 1;

// Loop to calculate the factorial
for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;  // Multiply the factorial by the current number
}

// Output the result
echo "The factorial of " . $number . " is: " . $factorial;
echo "<br>";
echo("This program is written by Pavni Suri-0221BC030");

?>
