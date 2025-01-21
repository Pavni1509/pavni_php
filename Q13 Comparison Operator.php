<?php

    $x = 25;
    $y = 35;
    $z = "25";
    
    var_dump($x == $z);  // Outputs: boolean true
    var_dump($x === $z); // Outputs: boolean false
    var_dump($x != $y);  // Outputs: boolean true
    var_dump($x !== $z); // Outputs: boolean true
    var_dump($x < $y);   // Outputs: boolean true
    var_dump($x > $y);   // Outputs: boolean false
    var_dump($x <= $y);  // Outputs: boolean true
    var_dump($x >= $y);  // Outputs: boolean false
    echo "<br>";

  echo("This program is written by Pavni Suri-0221BC030");

?>