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
    $new_holder_name = $_POST['newCardholderName'];
    
    // Update the record
    $sql = "UPDATE card_holders SET card_holder_name='$new_holder_name' WHERE card_number='$card_number'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$conn->close();
?>
<form method="POST">
    <label>Card Number to Update:</label>
    <input type="text" name="cardNumber" required><br>
    <label>New Cardholder Name:</label>
    <input type="text" name="newCardholderName" required><br>
    <button type="submit">Update</button>
</form>
