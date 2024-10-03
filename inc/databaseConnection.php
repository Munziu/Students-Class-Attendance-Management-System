<?php
    $serverName = "localhost";  // Database server, usually 'localhost'
    $userName = "root";  // MySQL username, default is 'root'
    $password = "";  // MySQL password, usually empty for local dev environments
    $dbName = "login_info";  // The name of your database

    // Create connection
    $conn = new mysqli($serverName, $userName, $password, $dbName);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully!";
?>
