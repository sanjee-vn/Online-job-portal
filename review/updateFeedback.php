<?php 
$conn = mysqli_connect("localhost", "root", "", "jobnexus");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    // Get and sanitize submitted values
    $id = intval($_POST['id']); // Ensures id is an integer
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $comments = htmlspecialchars(trim($_POST['Comments']));

    // Prepare the SQL update query
    $sql = "UPDATE feedbacks SET name = ?, email = ?, Comments = ? WHERE id = ?";
    
    // Initialize and prepare the statement
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        // Bind the parameters to the query
        $stmt->bind_param("sssi", $name, $email, $comments, $id);
        
        // Execute the statement
        if ($stmt->execute()) {
            echo "Feedback updated successfully!";
        } else {
            echo "Error updating record: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();

// Redirect back to the admin page or wherever you want to go
header("Location: admin.php");
exit();
?>
