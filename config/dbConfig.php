<?php
// Database configuration
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "sdac";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Set character set to utf8mb4 for full Unicode support
$db->set_charset("utf8mb4");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
