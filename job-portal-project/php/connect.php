<?php
/*
 * connect.php
 * Establishes a connection to the MySQL database for the job portal project.
 */

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "jobnexus";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
