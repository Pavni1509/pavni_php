<?php
    // Starting session
    session_start();
    // Storing Session Variables
    $_SESSION["firstname"] = "Tanisha";
    $_SESSION["lastname"] = "Vyas";
    //Accessing Session Variables
    echo "First name is " . $_SESSION["firstname"] . "<br>";
    echo "Last name is " . $_SESSION["lastname"] . "<br>";
    echo("<br>This program is written by Pavni Suri-0221BC030");
?>