<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "jobnexus");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted and if the 'id' is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    // Get the id of the review to delete
    $id = $_POST['id'];

    // Prepare the SQL delete query
    $sql = "DELETE FROM feedbacks WHERE id = ?";
    
    // Initialize and prepare the statement
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        // Bind the 'id' parameter to the query
        $stmt->bind_param("i", $id);
        
        // Execute the statement
        if ($stmt->execute()) {
            echo "Review deleted successfully!";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
header("Location: admin.php");
exit();
?>

