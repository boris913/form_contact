<?php

try {
    // Define the database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "global_migration";

    // Create a new PDO object with error reporting turned on
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));

} catch (PDOException $e) {
    // Display error message in a popup
    echo "<script>alert('Connection failed: " . $e->getMessage() . "');</script>";
}

?>