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

// Fetch records from the table
$sql = "SELECT * FROM card_holders";
$result = $conn->query($sql);

// Display the records
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Card Number</th><th>Card Holder</th><th>Expire Date</th><th>CVV</th><th>Payment Option</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['card_number'] . "</td>";
        echo "<td>" . $row['card_holder_name'] . "</td>";
        echo "<td>" . $row['expire_date'] . "</td>";
        echo "<td>" . $row['cvv_number'] . "</td>";
        echo "<td>" . $row['payment_option'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>
