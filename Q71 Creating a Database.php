<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // Create database
    $sql = "CREATE DATABASE myPS";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully!";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    echo("<br>This program is written by Pavni Suri-0221BC030");
    
    $conn->close();
    
?>