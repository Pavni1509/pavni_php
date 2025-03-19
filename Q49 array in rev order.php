<?php
$arr = [10, 3, 5, 8, 1];

// Display the original array
echo "Original array:<br>";
foreach ($arr as $value) {
    echo $value . "<br>";
}

// Sort the array in reverse order
rsort($arr);

// Display the sorted array
echo "<br>Sorted array (in reverse order):<br>";
foreach ($arr as $value) {
    echo $value . "<br>";
}
echo("<br>This program is written by Pavni Suri-0221BC030");
?>
