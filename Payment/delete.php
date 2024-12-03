<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "jobnexus";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_number = $_POST['cardNumber'];
    
    // Delete the record
    $sql = "DELETE FROM card_holders WHERE card_number='$card_number'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
<form method="POST">
    <label>Card Number to Delete:</label>
    <input type="text" name="cardNumber" required><br>
    <button type="submit">Delete</button>
</form>
