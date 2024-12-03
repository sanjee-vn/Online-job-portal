<?php 
$servername = "localhost"; // or your host
$username = "root"; // your database username
$password = ""; // your database password
$database = "jobnexus"; // your database name

// Create connection 
$conn = new mysqli($servername, $username, $password, $database); 

// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
}  

?> 
