<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "jobnexus";

// Retrieve form data
$Card_Number = $_POST['cardNumber'];
$Card_Holder_Name = $_POST['cardholdername'];
$Expire_Date = $_POST['expiredate'];
$CVV_Number = $_POST['cvv'];
$Payment_Option = $_POST['payment_option'];

// Connect to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Insert data into the table
$Upload = "INSERT INTO card_holders (card_number, card_holder_name, expire_date, cvv_number, payment_option)
           VALUES('$Card_Number', '$Card_Holder_Name', '$Expire_Date', '$CVV_Number', '$Payment_Option')";

if (mysqli_query($conn, $Upload)) {
    echo "<center> <h1>Payment details added successfully for: </h1> <h2 style='color: red;'>$Card_Holder_Name</h2> </center>";
} else {
    echo "Error: " . $Upload . "<br>" . $conn->error;
}

$conn->close();
?>
