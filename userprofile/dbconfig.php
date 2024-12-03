<?php 
$servername = "localhost"; // host
$username = "root"; //  database username
$password = ""; //  database password
$database = "jobnexus"; // database name

// Create connection 
$conn = new mysqli($servername, $username, $password, $database); 

// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
}  

?> 
